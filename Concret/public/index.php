<?php

use App\Controller\OrderController;

require "../Autoloader.php";
Autoloader::register();

define("ROOT", dirname(__DIR__));

$orderController = new OrderController();
$orderController->render();