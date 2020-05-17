<?php
include_once('conn.php');$choose = $_POST['choose'];
if($choose=="" || empty($choose))
{
	echo "กรุณากรอกชื่อให้ครบด้วยค่ะ";
	echo "<script language='Javascript'>
	alert('กรุณากรอกชื่อให้ครบด้วยค่ะ');
	window.location='insert_form_course_asm.php';
	</script>";
}else{
$sql = "insert into standard_2(choose) values('$choose')";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
			window.location='insert_course_asm.php';</script>";
urse_asm.php';</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้');</script>";
}
}
mysqli_close($conn);
?>