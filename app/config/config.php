<?php

$uri = $_SERVER['HTTP_HOST'];

define('BASEURL', 'http://' . $uri . '/mvc');

class Config
{
    public $db_user = 'root';
    public $db_pass = '';
    public $db_name = 'mvc';
}
