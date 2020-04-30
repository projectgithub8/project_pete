<?php //update.php
include_once('conn.php');
$d_id = $_POST["d_id"];
$d_id2 = $_POST["d_id2"];
$d_name = $_POST["d_name"];
$d_eng = $_POST["d_eng"];
$d_credit = $_POST["d_credit"];
$sql = "update user set
			d_id2 = '$d_id2'
		,	d_name = '$d_name'
		,	d_eng = '$d_eng'
		,	d_credit = '$d_credit'
		WHERE
		d_id = $d_id; ";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว');
	window.location='select2.php';
	</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
	alert('ไม่สามารถแก้ไขข้อมูลได้');
	window.location='select2.php';
	</script>";
}
mysqli_close($conn);
?>
