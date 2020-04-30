<?php
$height = $_GET["cm"]/100;
$weight = $_GET["kg"];
if(($height > 0) & ($weight > 0 )) {
	$bmi = $weight / ($height*$height);
	echo "BMI = $bmi"."<BR>";
if ( $bmi < 18.5) {
	echo "น้ำหนักต่ำกว่าเกณฑ์";
}elseif(($bmi >= 18.5) && ($bmi < 23)) {
	echo "นน.ปกติ";
}elseif(($bmi >= 23) && ($bmi < 25)) {	
	echo "นน.เกิน";
}elseif(($bmi >= 25) && ($bmi < 30)) {
	echo "อ้วน";
}elseif($bmi > 30)
	echo "อ้วนอันตราย";
}else{
	echo "Error value more than zero.";
}
?>
