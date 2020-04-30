<?php  //update_form_course.php
include_once('conn.php');
$sk_id = $_GET["sk_id"];
$sql = ("SELECT
			sk_id2
		,	sk_name	
		FROM softskill 
		WHERE sk_id = $sk_id");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$sk_id2 = $row["sk_id2"];
	$sk_name = $row["sk_name"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_softskill.php" method="post">
	<input type="hidden" name="sk_id" value=<?php echo $sk_id;?>>
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลสมรรถนะที่จำเป็นพื้นฐานในการทำงาน Soft Skill</td></tr></table>
	<table align = center width = "35%" border = "0">
		<tr><td align = "right"><b>รหัส</td><td> <input type="text"name="sk_id2" value=<?php echo $sk_id2; ?>><br></td></tr>
		<tr><td align = "right"><b>รายการ</td><td> <input type="text"name="sk_name" value=<?php echo $sk_name; ?>><br></td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td><input type= "submit" value="แก้ไข">
		<input type= "reset" value="ยกเลิก"><br></td></tr>
</table> <br>
</form>
</body>
<html>