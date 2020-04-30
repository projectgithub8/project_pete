<?php  //update_form.php
include_once('conn.php');
$d_id = $_GET["d_id"];
$sql = ("SELECT
			d_id2
		,	d_name	
		,	d_eng
		,	d_credit
		FROM ข้อมูลรายวิชา 
		WHERE d_id = $d_id");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$d_id2 = $row["d_id2"];
	$d_name = $row["d_name"];
	$d_eng = $row["d_eng"];
	$d_credit = $row["d_credit"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update.php" method="post">
	<input type="hidden" name="d_id" value=<?php echo $d_id;?>>
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลรายวิชา</td></tr></table>
	<table align = center width = "35%" border = "0">
		<tr><td align = right><b>รหัสรายวิชา</td><td> <input type="text"name="d_id2" value=<?php echo $d_id2; ?>><br></td></tr>
		<tr><td align = right><b>ชื่อรายวิชาภาษาไทย</td><td> <input type="text"name="d_name" value=<?php echo $d_name; ?>><br></td></tr>
		<tr><td align = right><b>ชื่อรายวิชาภาษาอังกฤษ</td><td> <input type="text"name="d_eng" value=<?php echo $d_eng; ?>>
		<BR><font color="red"><b>*กรุณาใส่ชื่อรายวิชาเป็นภาษาอังกฤษ</font><br>
		<tr><td align = right><b>หน่วยกิต</td><td><input type="text"name="d_credit" value=<?php echo $d_credit; ?>><br></td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td><input type= "submit" value="แก้ไข">
		<input type= "reset" value="ยกเลิก"><br></td></tr>
</table> <br>
</form>
</body>
<html>