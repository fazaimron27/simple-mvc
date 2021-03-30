<?php

namespace App\Config;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

return
    [
        'paths' => [
            'migrations' => '%%PHINX_CONFIG_DIR%%/../../database/migrations',
            'seeds' => '%%PHINX_CONFIG_DIR%%/../../database/seeds'
        ],
        'environments' => [
            'default_migration_table' => 'dblog',
            'default_database' => $_ENV['ENVIRONMENT'],
            'production' => [
                'adapter' => $_ENV['DB_ADAPTER'],
                'host' => $_ENV['DB_HOST'],
                'name' => $_ENV['DB_DATABASE'],
                'user' => $_ENV['DB_USERNAME'],
                'pass' => $_ENV['DB_PASSWORD'],
                'port' => $_ENV['DB_PORT'],
                'charset' => $_ENV['DB_CHARSET'],
            ],
            'development' => [
                'adapter' => $_ENV['DB_ADAPTER'],
                'host' => $_ENV['DB_HOST'],
                'name' => $_ENV['DB_DATABASE'],
                'user' => $_ENV['DB_USERNAME'],
                'pass' => $_ENV['DB_PASSWORD'],
                'port' => $_ENV['DB_PORT'],
                'charset' => $_ENV['DB_CHARSET'],
            ],
            'testing' => [
                'adapter' => $_ENV['DB_ADAPTER'],
                'host' => $_ENV['DB_HOST'],
                'name' => $_ENV['DB_DATABASE'],
                'user' => $_ENV['DB_USERNAME'],
                'pass' => $_ENV['DB_PASSWORD'],
                'port' => $_ENV['DB_PORT'],
                'charset' => $_ENV['DB_CHARSET'],
            ]
        ],
        'version_order' => 'creation'
    ];
