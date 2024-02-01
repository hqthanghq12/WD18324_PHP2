<?php
namespace App\Controllers;
use App\Models\Product;

class  ProductController extends BaseController {
    public $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    public function index(){
//        echo "123";
        $products = $this->product->getProduct();
//        var_dump($products);
//        die();
        return $this->render('product.list', compact('products'));
    }
}