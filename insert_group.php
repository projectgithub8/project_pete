<?php
include_once('conn.php');
$name_sub = $_POST['name_sub'];
if($name_sub=="" || empty($name_sub))
{
	echo "กรุณากรอกชื่อกลุ่มวิชาแด้วยค่ะ";
	echo "<script language='Javascript'>
	alert('กรุณากรอกชื่อกลุ่มวิชาด้วยค่ะ');
	window.location='insert_form_group.php';
	</script>";
}else{
$sql = "insert into group_sub(name_sub)
		values('$name_sub');";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
			window.location='select_group.php';</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้');</script>";
}
}
mysqli_close($conn);
?>