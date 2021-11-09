<?php

declare(strict_types=1);

namespace Tests;

use Slim\Exception\HttpUnauthorizedException;

/**
 * Class HelloTest
 * @package Tests
 */
class UserTest extends BaseTestCase
{
    /**
     * @var \Slim\App
     */
    protected $app;

    /**
     * @throws \Exception
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->app = $this->getAppInstance();
    }

    public function testCreateEndpointSuccess()
    {
        $userdetails = ['name'=>'test','password'=>'1234','email'=>'test@mailinator.io','username'=>'test'];
        // Arrange
        $request = $this->createRequest('POST', '/user/create',['HTTP_ACCEPT' => 'application/json'],[],$userdetails);

        // Act
        $response = $this->app->handle($request);
        $body = (string) $response->getBody();

        // Assert
        $this->assertEquals("Created", $body);
    }

    public function testCreateEndpointFailEmpty()
    {
        $userdetails = ['name'=>'test','password'=>'','email'=>'test@mailinator.io','username'=>'test'];
        // Arrange
        $request = $this->createRequest('POST', '/user/create',['HTTP_ACCEPT' => 'application/json'],[],$userdetails);

        // Act
        $response = $this->app->handle($request);
        $body = (string) $response->getBody();

        // Assert
        $this->assertEquals('Bad Request'.PHP_EOL.'Required values not found', $body);
    }

    public function testCreateEndpointFailMail()
    {
        $userdetails = ['name'=>'test','password'=>'1234','email'=>'test','username'=>'test'];
        // Arrange
        $request = $this->createRequest('POST', '/user/create',['HTTP_ACCEPT' => 'application/json'],[],$userdetails);

        // Act
        $response = $this->app->handle($request);
        $body = (string) $response->getBody();

        // Assert
        $this->assertEquals('Bad Request'.PHP_EOL.'Invalid email', $body);
    }

    public function testLoginEndpointThrowsUnauthorized()
    {
        // Arrange
        $request = $this->createRequest('POST', '/user/login');

        // Assert
        $this->expectException(HttpUnauthorizedException::class);

        // Act
        $response = $this->app->handle($request);
    }

    public function testLoginEndpointWithBasicAuth()
    {
        // Arrange
        $headers = ['HTTP_ACCEPT' => 'application/json', 'Authorization' => $this->getAuthorizationHeader()];
        $request = $this->createRequest('POST', '/user/login', $headers);

        // Act
        $response = $this->app->handle($request);
        $body = (string) $response->getBody();

        // Assert
        $this->assertArrayHasKey("JWT", json_decode($body,1));
    }
}
