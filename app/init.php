<?php

// composer autoloader
require_once 'vendor/autoload.php';
require_once 'config/config.php';

use App\Config\Config;

$cfg = new Config();

if ($cfg->_env === 'development' || $cfg->_env === 'testing') {
    error_reporting(E_ALL);
} else if ($cfg->_env === 'production') {
    error_reporting(0);
} else {
    die('ENVIRONMENT NOT FOUND');
}

require_once 'config/phinx.php';
require_once 'config/database.php';
require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Helper.php';
