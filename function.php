<?php
// // Định nghĩa hàm và gọi hàm
// function sum(){
//     $a=5;
//     $b=8;
//     $total=$a+$b;
//     echo 'Tong la: '.$total;
// }
// sum();
// Hàm có truyền tham số
// function sum($a,$b){
//     $total=$a+$b;
//     echo 'Tong la: '.$total;
// }
// sum(3,7);
// echo '<hr>';
// sum(5,10);
// echo "<hr>";
// $x=4;
// $y=5;
// sum($x,$y);
// echo "<hr>";
// $name=['Hieu','Cuong','Duong'];
// function showArray($arr){
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// }
// showArray($name);
// echo "<hr>";
// $point=[5,7,2,9];
// showArray($point);

// Hàm có giá trị trả về
function sum($a,$b){
    $total=$a+$b;
    return $total;
}
$bt=sum(3,4)+sum(5,6);
echo $bt;
