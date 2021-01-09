<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class Database extends Config
{
    public function __construct()
    {
        $capsule = new Capsule();

        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'username' => $this->db_user,
            'password' => $this->db_pass,
            'database' => $this->db_name,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ]);

        $capsule->bootEloquent();
    }
}

new Database();
