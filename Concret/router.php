<?php

use App\Controller\OrderController;
use App\Controller\ProductController;

if (array_key_exists("page", $_GET)) {
    
    switch ($_GET["page"]) {
        case 'orders':
            $controller = new OrderController();
        break;
        case 'product':
            $controller = new ProductController();
        break;
        
        default:
        # code...
    break;
} else{
    $controller = new OrderController();

}
$controller->render();
}