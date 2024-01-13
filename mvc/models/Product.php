<?php
require_once "db.php";
class Product extends db{
    public function getAllProduct(){
        $sql = "SELECT * FROM sanpham";
        return $this->getData($sql);
    }
}

