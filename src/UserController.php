<?php

declare(strict_types=1);

namespace App;

// Including database collection with Eloquent ORM
require_once __DIR__ . '/../app/bootstrap.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpUnauthorizedException;
use Models\User;
use Firebase\JWT\JWT;

/**
 * Class created to manage users information
 * @author Ever Giraldo
 */
class UserController extends Controller
{

    /**
     * @param Request $request (Slim object)
     * @param Response $response (Slim object)
     * @requires Header Basic Auth (Basic base_64 encoded string username:password)
     * @return Response
     */
    public function loginUser(Request $request, Response $response): Response
    {   
        // Initializing Variables
        $status = 401;
        $body = 'Unauthorized';

        // Getting basic http auth
        $basicAuth = $request->getHeader('Authorization');
        // Removing basic and possible spaces
        $basicAuth = preg_replace('/Basic[\s]+/i', '', $basicAuth);
        $decodedUser = base64_decode($basicAuth[0]);
        $decodedUser = explode(':', $decodedUser);

        $existingUser = User::where('username',$decodedUser[0])->first();
        if (!empty($existingUser)) {
            if (password_verify($decodedUser[1], $existingUser->password)) {
                $status = 200;
                $responseArray = array();
                $responseArray['message'] = 'User logged successfully';
                $responseArray['JWT'] = JWT::encode(['id' => $existingUser->id, 'email' => $existingUser->email, 'username' => $existingUser->username], $_ENV["JWT_SECRET"], "HS256");
                $body = json_encode($responseArray);

            }else {
                throw new HttpUnauthorizedException($request);
            }
        }else{
            throw new HttpUnauthorizedException($request);
        }

        $response->getBody()->write($body);
        return $response->withStatus($status);
    }

    /**
     * @param Request $request (Slim object)
     * @param Response $response (Slim object)
     * @requires name (string), username (string), password(string), email
     * @return Response
     */
    public function createUser(Request $request, Response $response): Response
    {
        // Variables initialize
        $validations = true;
        $status = 500;
        $body = 'Internal server error'.PHP_EOL.'Please contact admin and provide the request details to check the specific case';

        // Getting params and hashing password
        $name = $request->getParsedBody()['name'];
        $username = $request->getParsedBody()['username'];
        $email = $request->getParsedBody()['email'];
        $password = password_hash($request->getParsedBody()['password'], PASSWORD_DEFAULT);

        $existingUser = User::where('username',$username)->orWhere('email',$email)->first();

        // Validating inputs
        if (!empty($existingUser)) {
            $validations = false;
            $status = 400;
            $body = 'Bad Request'.PHP_EOL.'User already exists';
        }else if (empty($name) || empty($username) || empty($email)) {
            $validations = false;
            $status = 400;
            $body = 'Bad Request'.PHP_EOL.'Required values not found';
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validations = false;
            $status = 400;
            $body = 'Bad Request'.PHP_EOL.'Invalid email';
        }

        if ($validations) {
            $user = new User();
            $user->name = $name;
            $user->username = $username;
            $user->email = $email;
            $user->password = $password;

            try {
                if ($user->save()) {
                    $status = 201;
                    $body = 'Created';
                }else{
                    $status = 400;
                    $body = 'Bad Request'.PHP_EOL.'Unable to create new user';
                }
            } catch (Exception $e) {
                //Logging details to check a possible issue
                $this->createErrorLog($_SERVER['REMOTE_ADDR'],'user',$request->headers,$request->getQueryParams(),$request->getParsedBody());
            }
        }
        $response->getBody()->write($body);
        return $response->withStatus($status);
    }
}
