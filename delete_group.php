<?php //delete.php
include_once('conn.php');
$id_sub = $_GET["id_sub"];
$sql = "delete from group_sub
		where id_sub = '$id_sub'";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('ลบข้อมูลเรียบร้อยแล้ว');
	window.location='select_group.php';
	</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
	alert('ไม่สามารถลบข้อมูลได้');
	window.location='select_group.php';
	</script>";
}
mysqli_close($conn);

?>
<a href="delete_course.php?id_sub=<?php echo $row_list['id_sub']; ?>"