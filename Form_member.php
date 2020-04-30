<!DOCTYPE html>
<html>
<body>
<form action = "insert.php" method = "post">
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลนักศึกษา</td></tr></table>
	<table align = center width = "25%" border = "0">
		<tr><td><b> รหัสนักศึกษา  </td><td> <input type = "text" name = "Student_ID"> </td></tr>
		<tr><td><b> ชื่อ - นามสกุล  </td><td> <input type = "text" name = "Student_Name"> </td></tr>
		<tr><td><b> กลุ่มเรียน  </td><td> <input type = "text" name = "Group_ID"><br> </td></tr>
		<tr><td><b> คณะ  </td><td>
		<select name = "Faculty_ID">
			<option value = "กรุณาเลือกคณะ" selected>กรุณาเลือกคณะ</option>
			<option value = "คณะครุศาสตร์อุตสาหกรรม">คณะครุศาสตร์อุตสาหกรรม</option>
			<option value = "คณะบริหารธุรกิจและเทคโนโลยีสารสนเทศ">คณะบริหารธุรกิจและเทคโนโลยีสารสนเทศ</option>
			<option value = "คณะเทคโนโลยีการเกษตรและอุตสาหกรรมเกษตร">คณะเทคโนโลยีการเกษตรและอุตสาหกรรมเกษตร</option>
			<option value = "คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
			<option value = "คณะวิศวกรรมศาสตร์และสถาปัตยกรรมศาสตร์">คณะวิศวกรรมศาสตร์และสถาปัตยกรรมศาสตร์</option>
			<option value = "คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
		</select><br> </td></tr>
		<tr><td><b> รูปนักศึกษา  </td><td> <input type = "file" name = "Student_Pictures"><br> </td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td> <input type = "submit" value = "เพิ่มข้อมูล">
			 <input type = "reset" value = "ล้างข้อมูล"><br> </td></tr>
	</table> <br>
</form>
</body>
</html>
<?php

?>