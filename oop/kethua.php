<?php
class ConNguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an(){
        echo $this->mat;
    }
}
class NguoiLon extends ConNguoi {
//    Thuộc tính

    public $longnach;
    public function  di(){
        echo $this->chan;
        $this->an();
    }
}

class TreCon extends NguoiLon {
    public function bo(){
        echo $this->mat;
        $this->an();
    }
}

// Khởi tạo đối tượng
$nl = new NguoiLon();
$nl->mat = "Hai mí";
$tc = new TreCon();
$tc->mat = "Một mí";
$tc->bo();
