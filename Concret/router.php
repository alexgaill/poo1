<?php

use App\Controller\UserController;
use App\Controller\OrderController;
use App\Controller\ProductController;

if (array_key_exists("page", $_GET)) {
    
    switch ($_GET["page"]) {
        case 'orders':
            $controller = new OrderController();
            $controller->render();

        break;
        case 'product':
            $controller = new ProductController();
        $controller->render();

        break;
        case 'connexion':
            $controller = new UserController();
            $controller->connexion();
    }
} else {
    $controller = new OrderController();
    $controller->render();
}