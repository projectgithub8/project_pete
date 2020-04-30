<?php //delete.php
include_once('conn.php');
$d_id = $_GET["d_id"];
$sql = "delete from user
		where d_id = '$d_id'";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('ลบข้อมูลเรียบร้อยแล้ว');
	window.location='select.php';
	</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
	alert('ไม่สามารถลบข้อมูลได้');
	window.location='select.php';
	</script>";
}
mysqli_close($conn);

?>
<a href="delete2.php?d_id=<?php echo $row_list['d_id']; ?>"
onClick="return confirm('คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?');">ลบไฟล์</a>