<?php
namespace App\Controller;

use App\Model\ProductModel;

class ProductController{

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function render(){
        $product = $this->model->query("SELECT * FROM products WHERE productCode = 'S10_1678'", true);
        require ROOT."/App/View/productView.php";
    }
}