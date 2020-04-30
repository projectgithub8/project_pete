<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function hello() {
	var d = new Date();
	var time = d.getHours();
	var day = d.getDay();
	if (time <= 10 && time >= 5) {
		document.write("Good Moring "+time);
	}else if(time > 10 && time <= 16) {
		document.write("Good Day "+time);
	}else{
		document.write("Go Home "+time);
	}
	switch(day)
	{
	 case 1 : document.write("<BR>วันจันทร์อีกละ ไม่อยากไปเรียนเลย");
				break;
	 case 0 :
	 case 6 : document.write("<BR>ไปเที่ยวกัน");
				break;
	 case 4 : document.write("<BR>ปล่อยหนูไป");
				break;
	 default : document.write("<BR>เรียนอีกละ"+day);
	}
}
</SCRIPT>
</HEAD>
<BODY ONLOAD="hello()">

</BODY>
</html>