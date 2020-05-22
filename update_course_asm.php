<?php //update_course.php
include_once('conn.php');
$d_id = $_POST["d_id"];
$sql = "update standard_2
        ,	choose = '$choose'
		WHERE
		d_id = $d_id; ";
$result= mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว');
	window.location='select_course_asm.php';
	</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
	alert('ไม่สามารถแก้ไขข้อมูลได้');
	window.location='update_form_course_asm.php';
	</script>";
}
mysqli_close($conn);
?>
