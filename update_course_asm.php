<?php //update_course.php
include_once('conn.php');
$std_id = $_POST["std_id"];
$sql = "update standard_2 OR standard set
		,	std_id = '$std_id'
        ,	standard_name = '$standard_name'
        ,	id_small = '$id_small'
        ,	std_name = '$std_name'
        ,	choose = '$choose'
		WHERE
		std_id = $std_id; ";
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
