<?php
$price = 100; //ราคาสินค้า
$vat = 7; // กำหนดค่า vat

$total = ($price/100)*7;

echo 'ราคาสินค้า '.$price.' บาท<br>';
echo 'Vat '.$vat.'%<br>';
echo 'ราคารวม '. $total.' บาท<br>'; // แสดงผลลัพธ์
?>