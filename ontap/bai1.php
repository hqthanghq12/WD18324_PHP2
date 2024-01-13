<?php
// Khai báo biến
// $tên biến; || $tên biến = giá trị;
// $a;
// Mảng trong PHP
// Khai báo mảng
// $tên mảng = array(gtri1, gtri2, ...);
//  $tên mảng = [tri1, gtri2, ...];

// $a = array(1,2,3,4,5,6,7,8,9,10);
// $n = [1,2,3,4,5,6,7,8,9,10];
// // Duyệt mảng bằng for
// for ($i=0; $i < count($n); $i++) { 
//     echo $n[ $i ],"";
// }
// // Duyệt mảng bằng foreach
// foreach ($n as $key => $value) {
//     echo $value;
// }
// $tong = 0;
// for ($i=0; $i < count($n); $i++) { 
//     $tong += $n[$i];
// }
// echo ( $tong);
// Mảng liên hợp
$arrayLH = ["A"=>5, "B"=>6, "C"=>7, "D"=> 8];
echo'<pre>';
print_r($arrayLH);
echo $arrayLH["B"];
?>