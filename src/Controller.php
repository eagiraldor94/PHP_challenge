<?php

declare(strict_types=1);

namespace App;

// Including database collection with Eloquent ORM
require_once __DIR__ . '/../app/bootstrap.php';
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class Controller
{
    // Ticker name to search
    protected $ticker;
    protected $mailer;

    /**
     * Parent Class created to unify log method and keep internal common variables
     * @author Ever Giraldo
     */
    public function __construct(\Swift_Mailer $mailer)
    {        
        $this->mailer = $mailer;
    }

    /**
     * @param $ip (string) Origin of the request
     * @param $logname (string) Name of log file
     * @param $headers (array) Headers of the request, null by default
     * @param $params (array) Query params (GET) of the request, null by default
     * @param $body (array) Body params (POST) of the request, null by default
     * @param $details (string) Aditional information that can be used for debug
     */
    protected function createErrorLog($ip,$logname,$headers = '',$params = '',$body ='', $details ='')
    {
        //Logging details to check a possible issue
        $log  = "Origin: ".$ip.' - '.date("Y/m/d h:i:s").PHP_EOL.
        "Headers: ".print_r($headers).PHP_EOL.
        "Get Params: ".print_r($params).PHP_EOL.
        "Body: ".print_r($body).PHP_EOL.
        "Details: ".$details.PHP_EOL.

        "-------------------------".PHP_EOL;
        //Save string to log, use FILE_APPEND to append.
        file_put_contents( __DIR__ . '/log_'.$logname.'_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        return; 
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function bye(Request $request, Response $response, array $args): Response
    {
        $name = $args['name'];
        $body = "Bye, $name";

        $response->getBody()->write($body);

        return $response;
    }
}
