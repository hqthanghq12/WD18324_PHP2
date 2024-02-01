<?php
// Tao ra tung ham de thuc thi tung chac nang
// rieng biet
require_once "models/Product.php";
class ProductController{
   public function listProduct(){
        $product = new Product();
        $products =$product->getAllProduct();
        include "views/products/list.blade.php";
    }

    public function addProduct(){
        echo "Them ne";
    }
}
