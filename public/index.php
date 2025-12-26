<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UserController;

$controller = new UserController();

header('Content-Type: application/json');

echo $controller->show();
