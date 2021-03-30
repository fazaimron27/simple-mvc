<?php

namespace App\Config;

use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    public function __construct()
    {
        $capsule = new Capsule();
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $capsule->addConnection([
            'driver' => $_ENV['DB_ADAPTER'],
            'host' => $_ENV['DB_HOST'],
            'username' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'database' => $_ENV['DB_DATABASE'],
            'charset' => $_ENV['DB_CHARSET'],
            'collation' => $_ENV['DB_COLLATION'],
            'prefix' => $_ENV['DB_PREFIX']
        ]);

        $capsule->bootEloquent();
    }
}

new Database();
