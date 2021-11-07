<?php

declare(strict_types=1);

use App\UserController;
use Slim\App;

return function (App $app) {
    // unprotected routes
    $app->post('/user/create', UserController::class . ':createUser');

    // protected routes
    $app->get('/bye/{name}', HelloController::class . ':bye');
};
