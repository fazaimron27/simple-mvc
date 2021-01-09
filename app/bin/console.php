<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Commands\MigrateCommand;
use App\Commands\RollbackCommand;
use App\Commands\SeedRun;
use Symfony\Component\Console\Application;

$app = new Application();

$app->add(new MigrateCommand());
$app->add(new RollbackCommand());
$app->add(new SeedRun());

$app->run();
