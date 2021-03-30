<?php

// composer autoloader
require_once 'vendor/autoload.php';
require_once 'config/config.php';

use App\Config\Config;

$cfg = new Config();

if ($cfg->env === 'development' || $cfg->env === 'testing') {
    error_reporting(E_ALL);
} else if ($cfg->env === 'production') {
    error_reporting(0);
} else {
    die('ERROR REPORT NOT FOUND');
}

require_once 'config/phinx.php';
require_once 'config/database.php';
require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Helper.php';
