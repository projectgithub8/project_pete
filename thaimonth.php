<?php
function thaimonth($num)
{
	$arr = array();
	if($num<1 || $num>12)
	{
		return "เดือนไม่ถูกต้อง";
	}else{
		return $arr[$num];
	}
?>