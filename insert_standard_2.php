<?php
include_once('conn.php');
$id= $_POST['id'];
$id_small= $_POST['id_small'];
$std_name= $_POST['std_name'];
if($id=="" || empty($id)|| $id_small=="" || empty($id_small)|| $std_name=="" || empty($std_name))
{
	echo "<script language='Javascript'>
			alert('กรุณากรอกข้อมูลให้ครบถ้วน')
			window.location='insert_from_standard_2.php';
			</script>";
}
if(strlen($_POST['id_small']) != 3)
{
	echo "<script language='Javascript'>
	alert('กรุณากรอกรหัสมาตรฐานย่อยให้ถูกต้อง')
	window.location='insert_from_standard_2.php';
	</script>
	exit()";
}
$sql = "insert into standard_2(id,id_small,std_name)";
$sql .="values('$id','$id_small','$std_name')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('เพิ่มข้อมูลเรียบร้อย')
			window.location='select_standard_2.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถเพิ่มข้อมูลได้')
			</script>";
}
mysqli_close($conn);
?>