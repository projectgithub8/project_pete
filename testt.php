<?php
function convertToMonth($num_of_month){
if($num_of_month == 0 and $num_of_month >12){
$result = "error";
}else{
$month = array('','มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
$result = $month[$num_of_month];
return $result;
}
}
?>