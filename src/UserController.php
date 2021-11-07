<?php

declare(strict_types=1);

namespace App;

// Including database collection with Eloquent ORM
require_once __DIR__ . '/../app/bootstrap.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Models\User;

/**
 * Class created to manage users information
 * @author Ever Giraldo
 */
class UserController
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
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
                $log  = "Origin: ".$_SERVER['REMOTE_ADDR'].' - '.date("Y/m/d h:i:s").PHP_EOL.
                "Headers: ".print_r($request->headers).PHP_EOL.
                "Get Params: ".print_r($request->getQueryParams()).PHP_EOL.
                "Body: ".print_r($request->getParsedBody()).PHP_EOL.
                "-------------------------".PHP_EOL;
                //Save string to log, use FILE_APPEND to append.
                file_put_contents( __DIR__ . '/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
            }
        }
        $response->getBody()->write($body);
        return $response->withStatus($status);
    }
}
