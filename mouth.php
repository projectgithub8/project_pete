<?php
$mouth = $_POST["mouth"];
$date = array("<Script>alert('ไม่มีเดือน 0 กรุณาใส่เดือนให้ถูกต้อง');
		window.location = 'mouth_form.php'</Script>"
		, "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
if($mouth > 12){
	echo "<script>
			alert('เดือนไม่ถูกต้อง')
			window.location = 'mouth_form.php'
			</script>";
			
}else{
	echo $date["$mouth"];
}
?>
<BR>
<a href='mouth_exit.php'>Exit</a>
	