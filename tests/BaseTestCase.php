<?php

declare(strict_types=1);

namespace Tests;
// Including database collection with Eloquent ORM
require_once __DIR__ . '/../app/bootstrap.php';

use DI\ContainerBuilder;
use Exception;
use PHPUnit\Framework\TestCase as PHPUnit_TestCase;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Psr7\Factory\StreamFactory;
use Slim\Psr7\Headers;
use Slim\Psr7\Request as SlimRequest;
use Slim\Psr7\Uri;
use Symfony\Component\Dotenv\Dotenv;
use Models\User;

class BaseTestCase extends PHPUnit_TestCase
{
    /**
     * @return App
     * @throws Exception
     */
    protected function getAppInstance(): App
    {
        parent::setUp();

        $containerBuilder = new ContainerBuilder();

        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . '/../.env');

        $dependencies = require __DIR__ . '/../app/services.php';
        $dependencies($containerBuilder);

        $container = $containerBuilder->build();
        AppFactory::setContainer($container);

        $app = AppFactory::create();

        $routes = require __DIR__ . '/../app/routes.php';
        $routes($app);

        $auth = require __DIR__ . '/../app/auth.php';
        $auth($app);

        return $app;
    }

    /**
     * @return String
     */
    protected function getAuthorizationHeader(): String
    {
        $user = User::all();
        if (count($user)>0) {
            $adminTestingUsername =  $user[0]->username;
            $adminTestingPassword = $user[0]->username;
            return 'Basic ' . base64_encode("$adminTestingUsername:$adminTestingPassword");        
        }
    }

    /**
     * @param string $method
     * @param string $path
     * @param array  $headers
     * @param array  $cookies
     * @param array  $serverParams
     * @return Request
     */
    protected function createRequest(
        string $method,
        string $path,
        array $headers = ['HTTP_ACCEPT' => 'application/json'],
        array $cookies = [],
        array $serverParams = []
    ): Request {
        $uri = new Uri('', 'localhost', 80, $path);
        $handle = fopen('php://temp', 'w+');
        $stream = (new StreamFactory())->createStreamFromResource($handle);

        $h = new Headers();
        foreach ($headers as $name => $value) {
            $h->addHeader($name, $value);
        }

        return new SlimRequest($method, $uri, $h, $cookies, $serverParams, $stream);
    }
}
