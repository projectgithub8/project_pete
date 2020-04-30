<?php  //update_form_course.php
include_once('conn.php');
$id_sub = $_GET["id_sub"];
$sql = ("SELECT
			name_sub
		FROM group_sub 
		WHERE id_sub = $id_sub");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$name_sub = $row["name_sub"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_group.php" method="post">
	<input type="hidden" name="id_sub" value=<?php echo $id_sub;?>>
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลกลุ่มวิชา</td></tr></table>
	<table align = center width = "35%" border = "0">
		<tr><td align = right><b>ชื่อกลุ่มวิชา</td><td> <input type="text"name="name_sub" value=<?php echo $name_sub; ?>><br></td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td><input type= "submit" value="แก้ไข">
		<input type= "reset" value="ยกเลิก"><br></td></tr>
</table> <br>
</form>
</body>
<html>