<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = "sanpham";

//    public function __construct()
//    {
//        echo "Đây là file Product Model";
//
//    }
    public function getProduct(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}