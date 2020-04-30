<?php  //insert_form.php ?>
<!DOCTYPE html>
<html>
<body>
<form action="insert.php" method="post">
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลรายวิชา</td></tr></table>
	<table align = center width = "35%" border = "0">
		<tr><td align = right><b> รหัสรายวิชา </td><td> <input type = "text" name = "d_id2" ></td></tr>
		<tr><td align = right><b> ชื่อรายวิชาภาษาไทย</td><td> <input type = "text" name = "d_name"></td></tr>
		<tr><td align = right><b> ชื่อรายวิชาภาษาอังกฤษ</td><td> <input type = "text" name = "d_eng">
		<BR><font color="red"><b>*กรุณาใส่ชื่อรายวิชาเป็นภาษาอังกฤษ</font><br></td></tr>
		<tr><td align = right><b> หน่วยกิต</td><td> <input type = "text" name = "d_credit" ></td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td><input type= "submit" value="บันทึก">
		<input type= "reset" value="ยกเลิก"><br></td></tr>
</table> <br>
</form>
</body>
</html> 

