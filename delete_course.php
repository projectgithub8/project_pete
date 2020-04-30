<?php //delete.php
include_once('conn.php');
$d_id = $_GET["d_id"];
$sql = "delete from course
		where d_id = '$d_id'";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('ลบข้อมูลเรียบร้อยแล้ว');
	window.location='select_course.php';
	</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
	alert('ไม่สามารถลบข้อมูลได้');
	window.location='select_course.php';
	</script>";
}
mysqli_close($conn);

?>
<a href="delete_course.php?d_id=<?php echo $row_list['d_id']; ?>"