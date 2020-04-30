<?php
 $day = date("l");
 switch ($day) {
	 case "Monday" : print("วันนี้วันจันทร์");break;
	 case "Tuesday" : print("ว้นนี้วันอังคาร");break;
	 case "Wednesdy" : print("วันนี้วันพุธ");break;
	 case "Thursday" : print("ว้นนี้วันพฤหัส ทำงานอีกวันก็หยุดแล้ว");break;
	 case "Friday" : print("วันนี้วันสุดท้ายของการทำงาน");break;
	 default : print("เฮ... วันนี้วันหยุด นอนอยู่บ้าน");
 }
 ?>
