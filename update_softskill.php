<?php //update_course.php
include_once('conn.php');
$sk_id = $_POST["sk_id"];
$sk_id2 = $_POST["sk_id2"];
$sk_name = $_POST["sk_name"];
$sql = "update softskill set
			sk_id2 = '$sk_id2'
		,	sk_name = '$sk_name'
		WHERE
		sk_id = $sk_id; ";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว');
	window.location='select_softskill.php';
	</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
	alert('ไม่สามารถแก้ไขข้อมูลได้');
	window.location='select_softskill.php';
	</script>";
}
mysqli_close($conn);
?>
