<?php //update_course.php
include_once('conn.php');
$id_sub = $_POST["id_sub"];
$name_sub = $_POST["name_sub"];
$sql = "update group_sub set
			name_sub = '$name_sub'
		WHERE
		id_sub = $id_sub; ";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว');
	window.location='select_group.php';
	</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
	alert('ไม่สามารถแก้ไขข้อมูลได้');
	window.location='select_group.php';
	</script>";
}
mysqli_close($conn);
?>
