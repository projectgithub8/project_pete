<?php  //update_form_course.php
include_once('conn.php');
$std_id = $_GET["std_id"];
$sql = ("SELECT
			standard_name
            id_small
            std_name
		FROM standard_2
		WHERE std_id = $std_id");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
    $id_small = $row["id_small"];
    $std_name = $row["std_name"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_course_asm.php" method="post">
	<input type="hidden" name="std_id" value=<?php echo $std_id;?>>
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลกลุ่มวิชา</td></tr></table>
	<table align = center width = "35%" border = "0">
		<tr><td align = right><b>มาตรฐานการเรียนรู้</td><td> <input type="text"name="standard_name" value=<?php echo $standard_name; ?>><br></td></tr>
        <tr><td align = right><b>รหัสมาตรฐานย่อย</td><td> <input type="text"name="id_small" value=<?php echo $id_small; ?>><br></td></tr>
        <tr><td align = right><b>ชื่อมาตรฐานการเรียนรู้ย่อย</td><td> <input type="text"name="std_name" value=<?php echo $std_name; ?>><br></td></tr>
        <tr><td align = right><b>เกณฑ์ประเมิน</td><td> <input type="checkbox"name="choose" value=<?php echo $choose; ?>><br></td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td><input type= "submit" value="แก้ไข">
		<input type= "reset" value="ยกเลิก"><br></td></tr>
</table> <br>
</form>
</body>
<html>