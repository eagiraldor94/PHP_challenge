<?php 
// Ensuring vendor is not already imported
require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\Dotenv\Dotenv;

$capsule = new Capsule;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

$capsule->addConnection([
   "driver" => $_ENV["DB_DRIVER"],
   "host" => $_ENV["DB_HOST"],
   "database" => $_ENV["DB_NAME"],
   "username" => $_ENV["DB_USER"],
   "password" => $_ENV["DB_PASSWORD"]
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();