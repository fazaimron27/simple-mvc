<?php
if (!session_id()) session_start();

use App\Core\App;

require_once 'app/init.php';

$app = new App;
