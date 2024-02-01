<?php
include "nsp.php";
include "nsp1.php";
$sv = new NSP\SinhVien("PH123", "TrungDZ");
$sv->hienThiThongTin();
// namespace luôn luôn dc đặt trên đầu file PHP
// namespace đóng vai trò làm không gian đại diện cho class/ fun/ biến
// nhằm mục đích giải quyết vấn đề nhiều file khác nhau nhưng có chung tên class/ fun/ biến


