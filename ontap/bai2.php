<?php
//khai báo hàm
//function tên hàm (){
//
//}
// Nếu trong () có biến thì biến đó được gọi là tham số
// Và hàm đó gọi là hàm có chứa tham so
//Ham có chứa retunr thì hàm gọi hàm hàm có trả về
//Hàm mà k chứa retunr thì gọi là hàm không trả về
// Hàm không trả sẽ phải tử xử lý đầu ra
$a = 5;
$b = 6;
function ktSoChanLe($a){
//    Khai báo nhiều tham số miễn sao mỗi tham số cách nhau 1 dấu ,
//    Và nó phải nằm trong ngoặc
    if($a%2==0){
        echo "Đây là số chẵn";
    }else{
        echo "Đây là số lẻ";
    }
}
// Muốn sử dụng hàm -> Gọi hàm
// Nếu hàm không trả về thi gọi thẳng ra
// Nếu hàm có trả về thif cần thêm biến để lưu trữ hoặc phải sử dụng
// Luôn
// Hàm có bao tham số thì chuyền vào đó bấy nhiêu giá trị
ktSoChanLe($a);
// Xậy dựng 1 hàm có tham số và không trả về
// truyền vào hàm những tham số sau
// tên, năm sinh, que quan, scmt, sdt
// Hiên thị những thông tin sau
// tên, tuoi , que quan, scmt, sdt
