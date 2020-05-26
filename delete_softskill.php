<?php //delete.php
include_once('conn.php');
$d_id = $_GET["sk_id"];
$sql = "delete from course
		where sk_id = '$sk_id'";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('ลบข้อมูลเรียบร้อยแล้ว');
	window.location='select_softskill.php';
	</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
	alert('ไม่สามารถลบข้อมูลได้');
	window.location='select_softskill.php';
	</script>";
}
mysqli_close($conn);

?>
<a href="delete_softskill.php?d_id=<?php echo $row_list['sk_id']; ?>"