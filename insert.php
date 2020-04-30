<?php
include_once('conn.php');
$d_id2 = $_POST['d_id2'];
$d_name = $_POST['d_name'];
$d_eng = $_POST['d_eng'];
$d_credit = $_POST['d_credit'];
if($d_id2=="" || empty($d_id2)||
	$d_name=="" || empty($d_name)||
	$d_eng=="" || empty($d_eng)||
	$d_credit=="" || empty($d_credit))
{
	echo "กรุณากรอกชื่อวิชาและหน่วยกิตด้วยค่ะ";
	echo "<script language='Javascript'>
	alert('กรุณากรอกชื่อวิชาและหน่วยกิตด้วยค่ะ');
	window.location='insert_form.php';
	</script>";
}else{
$sql = "insert into ข้อมูลรายวิชา(d_id2,d_name,d_eng,d_credit)
		values('$d_id2','$d_name','$d_eng','$d_credit');";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
			window.location='select.php';</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้');</script>";
}
}
mysqli_close($conn);
?>