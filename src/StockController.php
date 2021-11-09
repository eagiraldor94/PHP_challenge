<?php

declare(strict_types=1);

namespace App;

// Including database collection with Eloquent ORM
require_once __DIR__ . '/../app/bootstrap.php';
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Models\Ticker;
use Models\Log;
use Models\User;
use Slim\Exception\HttpUnauthorizedException;

class StockController extends Controller
{

    protected function filterTicker($item){
        return mb_strtolower($item->symbol) === mb_strtolower($this->ticker);
    }

    /**
     * @param $data (string) with CSV structure
     * @return $responseArray (array) Asociative array with last values and headers as keys
     */
    protected function processCsvData($data){
        // Split CSV by lines
        $lines = explode(PHP_EOL, $data);
        
        // Get column names
        $headers = str_getcsv($lines[0]);
        // Get last row (current data)
        $current_info = str_getcsv($lines[count($lines)-1]);
        // Sometimes last row comes empty
        if (empty($current_info[0])) {
            $current_info = str_getcsv($lines[count($lines)-2]);
        }
        // Initialize array
        $responseArray = array();

        // Checking column names requested to return, also changing to lowercase as example
        for ($i = 0; $i < count($headers) ; $i++) {
            switch ($header = mb_strtolower($headers[$i])) {
                case 'open':
                case 'low':
                case 'high':
                case 'close':
                    $responseArray[$header] = $current_info[$i];
                    break;
                
                default:
                    break;
            }
        }
        return $responseArray;
    }

    /**
     * @param $ticker (string)
     * @return the name of the company or empty
     */
    protected function getTickerName($ticker){
        // Cleaning las part
        $ticker = explode('.',$ticker);
        // Getting action ticker
        $this->ticker = $ticker[0];
        // Checking if exists in local database
        $stock = Ticker::where('ticker',mb_strtoupper($this->ticker))->first();
        if (empty($stock) || empty($stock->stock_name)) {
            // Retrieving through API if not in local database
            $curl = curl_init();
            try {
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://api.iextrading.com/1.0/ref-data/symbols',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'GET',
                ));

                $jsonData = curl_exec($curl);
                if(curl_errno($curl)){
                    return 'Unable to find name'; 
                }
                curl_close($curl);
            } catch (Exception $e) {
                // Log the issue
                $this->createErrorLog($_SERVER['REMOTE_ADDR'],'stock','','','','Issue on CURL request for ticker: '.$this->ticker);
                // Return default value
                return 'Unable to find name'; 
            }
            // Decoding and filtering data
            $stockNames = json_decode($jsonData);
            $filteredNames = array_filter((array)$stockNames,array($this, 'filterTicker'));
            // Returning if a valid name
            if (!empty($filteredNames) && is_array($filteredNames)) {
                // Unknown index, retrieving first
                foreach ($filteredNames as $stock) {
                    return $stock->name;
                }
            }else{
                return 'Unable to find name';
            }
        }else {
            return $stock->stock_name;
        }

    }

    /**
     * @param Request $request
     * @param Response $response
     * @requires q (string)
     * @return Response
     */
    public function getMarketValues(Request $request, Response $response): Response
    {
        //Getting values and initializing
        $ticker = $request->getQueryParams()['q'];
        $status = 400;
        $body = 'Bad Request'.PHP_EOL.'Param q can not be empty';

        // Getting JWT token info
        $tokenData = $request->getAttribute('decoded_token_data');

        if (!empty($ticker) && !empty($tokenData) && is_int($tokenData['id'])) {

            $user = User::find($tokenData['id']);
            if (empty($user)) {
                throw new HttpUnauthorizedException($request);
            }

            // Request to Stooq API
            try {
                // Using file_get_contents instead of curl because of curl is not returning CSV data
                $data = file_get_contents("https://stooq.com/q/d/l?s=".$ticker);
                if ($data != "No data") {
                    // Get required data from data
                    $responseArray = $this->processCsvData($data);
                    $responseArray['symbol'] = mb_strtoupper($ticker);
                    $responseArray['name'] = $this->getTickerName($ticker);
                    $status = 200;
                    $body = json_encode($responseArray);

                    // Saving log about query
                    $log = new Log();
                    $log->open = (double)$responseArray['open'];
                    $log->close = (double)$responseArray['close'];
                    $log->low = (double)$responseArray['low'];
                    $log->high = (double)$responseArray['high'];
                    $log->name = $responseArray['name'];
                    $log->symbol = $responseArray['symbol'];
                    $log->user_id = $tokenData['id'];
                    try {
                        $log->save();
                    } catch (Exception $e) {
                        //Logging details to check a possible issue
                        $this->createErrorLog($_SERVER['REMOTE_ADDR'],'user',$request->headers,$request->getQueryParams(),$request->getParsedBody(),'Error saving query logs');
                    }
                }else{
                    $status = 404;
                    $body = 'Not Found'.PHP_EOL.'Can not find stock with provided ticker';
                }
            } catch(Exception $e) {
                //Logging details to check a possible issue
                $this->createErrorLog($_SERVER['REMOTE_ADDR'],'user',$request->headers,$request->getQueryParams(),$request->getParsedBody(),'Error getting csv info');
            }
        }
        try {
            // Then we can just call the Mailer from any Controller method.
            
            $message = (new \Swift_Message('Requested Market Data'))
                ->setFrom([$_ENV["MAILER_FROM"] => 'PHP Challenge (Market data API)'])
                ->setTo([$user->email])
                ->setBody($body);

            // Later just do the actual email sending.
            $this->mailer->send($message);
            
        } catch (Exception $e) {
            $this->createErrorLog($_SERVER['REMOTE_ADDR'],'user',$request->headers,$request->getQueryParams(),$request->getParsedBody(),'Error sending mail');
        }

        $response->getBody()->write($body);
        
        return $response->withStatus($status);

    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function getUserHistory(Request $request, Response $response): Response
    {

        // Getting JWT token info
        $tokenData = $request->getAttribute('decoded_token_data');
        if (!is_int($tokenData['id'])) {
            throw new HttpUnauthorizedException($request);
        }
        //Getting values and initializing
        $logs = Log::where('user_id',$tokenData['id'])->get();
        $logs = $logs->sortByDesc('id');
        $responseArray = array();
        if (count($logs)>0) {
            foreach ($logs as $log) {
                $arrayItem = new \stdClass();
                $arrayItem->date = $log->created_at->format('Y-m-d\TH:i:s\Z');
                $arrayItem->name = $log->name;
                $arrayItem->symbol = $log->symbol;
                $arrayItem->open = (double)$log->open;
                $arrayItem->high = (double)$log->high;
                $arrayItem->low = (double)$log->low;
                $arrayItem->close = (double)$log->close;
                array_push($responseArray, $arrayItem);
            }
            $status = 200;
            $body = json_encode($responseArray);
        }else {
            $status = 200;
            $body = 'No data available';
        }

        $response->getBody()->write($body);
        
        return $response->withStatus($status);

    }
}
