<?php
// khai báo class truu tuong
abstract class DongVat{
    // 1 class duoc goi la class truu tuong la
    // khi class do chua phuong thuc truu tuong
    // class truu tuong thi khong the khoi tao
    // nhung van co phuong thuc va thuoc tinh nhu
    // nhung class binh thuong

    // phương thuc truu tuong
    abstract public function di();
}
class ConNguoi extends DongVat{
    public function di(){
        echo "di bang 2 chân";
    }
}
$cn = new ConNguoi();
$cn->di();
// Có hình tròn, hình vuong, hinh chữ nhật
// hay tạo ra 1 class truu tuong
// Để tính chu vi va dien tich cua moi hinh


