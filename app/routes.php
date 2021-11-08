<?php

declare(strict_types=1);

use App\UserController;
use App\StockController;
use Slim\App;

return function (App $app) {
    // unprotected routes
    $app->post('/user/create', UserController::class . ':createUser');

    // Get JWT
    $app->post('/user/login', UserController::class . ':loginUser');

    // protected routes
    $app->get('/stock', StockController::class . ':getMarketValues');
    $app->get('/history', StockController::class . ':getUserHistory');
};
