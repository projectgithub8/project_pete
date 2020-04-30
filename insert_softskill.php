<?php
include_once('conn.php');
$sk_id2 = $_POST['sk_id2'];
$sk_name = $_POST['sk_name'];
if($sk_id2=="" || empty($sk_id2)||
	$sk_name=="" || empty($sk_name))
{
	echo "กรุณากรอกชื่อรายการด้วยค่ะ";
	echo "<script language='Javascript'>
	alert('กรุณากรอกชื่อรายการด้วยค่ะ');
	window.location='insert_form_softskill.php';
	</script>";
}else{
$sql = "insert into softskill(sk_id2,sk_name)
		values('$sk_id2','$sk_name');";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
			window.location='select_softskill.php';</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้');</script>";
}
}
mysqli_close($conn);
?>