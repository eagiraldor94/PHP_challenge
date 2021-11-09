<?php

declare(strict_types=1);

namespace Tests;

use Slim\Exception\HttpUnauthorizedException;

/**
 * Class HelloTest
 * @package Tests
 */
class StockTest extends BaseTestCase
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

    public function testStockEndpointThrowsUnauthorized()
    {
        // Arrange
        $request = $this->createRequest('GET', '/stock');

        // Assert
        $this->expectException(HttpUnauthorizedException::class);

        // Act
        $response = $this->app->handle($request);
    }

    public function testHistoryEndpointThrowsUnauthorized()
    {
        // Arrange
        $request = $this->createRequest('GET', '/history');

        // Assert
        $this->expectException(HttpUnauthorizedException::class);

        // Act
        $response = $this->app->handle($request);
    }

    public function testStockEndpointSuccess()
    {
        // Getting JWT token
        $headers = ['HTTP_ACCEPT' => 'application/json', 'Authorization' => $this->getAuthorizationHeader()];
        $request = $this->createRequest('POST', '/user/login', $headers);
        // Act
        $response = $this->app->handle($request);
        $body = (string) $response->getBody();
        $params = json_decode($body,1);

        $headers = ['HTTP_ACCEPT' => 'application/json', 'Authorization' => "Bearer ".$params['JWT']];
        // Arrange
        $request2 = $this->createRequest('GET', '/stock?q=aapl.us',$headers);
        $body2 = (string) $response2->getBody();

        // Assert
        $this->assertArrayHasKey("open", json_decode($body2,1));
    }

    public function testStockEndpointFailEmpty()
    {
        // Getting JWT token
        $headers = ['HTTP_ACCEPT' => 'application/json', 'Authorization' => $this->getAuthorizationHeader()];
        $request = $this->createRequest('POST', '/user/login', $headers);
        // Act
        $response = $this->app->handle($request);
        $body = (string) $response->getBody();
        $params = json_decode($body,1);

        $headers = ['HTTP_ACCEPT' => 'application/json', 'Authorization' => "Bearer ".$params['JWT']];
        // Arrange
        $request2 = $this->createRequest('GET', '/stock?q=aapl.us',$headers);
        $body2 = (string) $response2->getBody();

        // Assert
        $this->assertEquals('Bad Request'.PHP_EOL.'Param q can not be empty', $body);
    }

    public function testHistoryEndpointSuccess()
    {
        // Getting JWT token
        $headers = ['HTTP_ACCEPT' => 'application/json', 'Authorization' => $this->getAuthorizationHeader()];
        $request = $this->createRequest('POST', '/user/login', $headers);
        // Act
        $response = $this->app->handle($request);
        $body = (string) $response->getBody();
        $params = json_decode($body,1);

        $headers = ['HTTP_ACCEPT' => 'application/json', 'Authorization' => "Bearer ".$params['JWT']];
        // Arrange
        $request2 = $this->createRequest('GET', '/history',$headers);
        $status = (int) $response2->getStatus();

        // Assert
        $this->assertEquals(200, $status);
    }

}
