<?php
require dirname(__DIR__).'/config/dev.php';
require dirname(__DIR__).'/vendor/autoload.php';

session_start();

$router = new \App\config\Router();
$router->run();