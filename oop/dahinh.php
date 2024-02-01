<?php
interface DiChuyen{
    // interface nó k phải là 1 class
    // vậy cho nên nó cũng k có phương thức hay thuộc tính
    // nhưng no van giu lai phuong thuc truu tuong
   public function di();
}

class ConNguoi implements DiChuyen{
    public function di()
    {
        echo "Di bang 2 chan";
    }
}
class OTo implements DiChuyen{
    public function di()
    {
        echo "di băng 4 banh";
    }
}
// interface hay abstract deu la ban thiet ke cua du
// an phan mem
// interface là ban thiet ke cho cac class co chung hanh
// dong nhung k ban chat
// abstract là ban thiet ke cho cac class co chung ban chat
// muc do mở rong dự an của interface lơn hơn