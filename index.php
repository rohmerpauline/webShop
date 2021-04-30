<?php

session_start();

use App\Autoloader;
use App\Core\Main;


require_once 'Autoloader.php';
Autoloader::register();

$app = new Main();
$app -> start();