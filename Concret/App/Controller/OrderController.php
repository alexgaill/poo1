<?php
namespace App\Controller;

use App\Model\OrderModel;

class OrderController{

    public function __construct()
    {
        $this->model = new OrderModel();
    }

    public function render(){
        $orders = $this->model->getOrders();
        require ROOT."/App/View/orderView.php";
    }
}