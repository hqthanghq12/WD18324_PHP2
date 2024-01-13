<?php
class SinhVien{
//    khai báo thuộc tính -> biến
// Tên, năm sinh, masv, CCCD
    public $tenSinhVien;
    public $namSinh;
    public $maSinhVien;
    public $canCuocCD;
//    Hàm Magic function
// Đây là 1 phương thức đặc biệt
// Không giong những hàm khác cần phải gọi mới hoạt động
// Mà phuong thức này được hoạt động ngay khi đối tượng được khởi tạo
// Phương thức khởi tạo
// Có tham số
    public function __construct($tenSinhVien, $namSinh, $maSinhVien, $canCuocCD)
    {
        $this->tenSinhVien = $tenSinhVien;
        $this->namSinh = $namSinh;
        $this->maSinhVien = $maSinhVien;
        $this->canCuocCD = $canCuocCD;
    }
//    Khai báo phương thức -> hàm
// Hàm get dùng để trả ra dự liệu của thuộc tính
// Hàm set là hàm truyền dữ liệu vào cho thuộc tính
    public function getTenSV(){
        // Muốn gọi đến thuộc tính hay phương thưc của đối tượng
        // nhớ đến từ khóa $this
        return $this->tenSinhVien;
    }
    public function  setTenSV($tenSV){
        $this->tenSinhVien = $tenSV;
    }
    public function tinhTuoi(){
        return Date('Y') - $this->namSinh;
    }
    public function hienThi(){
        echo $this->tenSinhVien;
        echo $this->tinhTuoi();
        echo $this->maSinhVien;
        echo $this->canCuocCD;
    }


}
// viết 2 phương thức
// Dựa trên năm sinh hãy tính tuổi (hàm k tham số và có trả về)
// Viết hàm hiển thi tất cả các thông tin sau
// tên, tuôi, ma sv, số cccd
// Khởi tạo 1 đối tượng
$sv = new SinhVien("Nguyễn Thành Trung", 2004, "PH1234", "00120000000");
//$sv->tenSinhVien = "Nguyễn Thành Trung";
$sv->setTenSV("Nguyễn Văn A");
$sv->hienThi();

