<div align="center"><img src='banner.png' width='1200' height='250'><BR><BR>
<form method="get" id="form" enctype="multipart/form-data" action="" >

	<strong><center>ค้นหาข้อมูล</strong>
	<input type="text" name="search" size="30" value="" autocomplete="off">
	<input type="submit" value="ค้นหาข้อมูล"></center>
</form>
<font size ="5" ><center><b><u>แสดงข้อมูลรายวิชา</b></u></center></font>
<?php //select.php
include_once('conn.php');
$search = isset($_GET['search']) ? $_GET['search']:'';
$sql = "SELECT * FROM ข้อมูลรายวิชา WHERE d_name LIKE '%$search%'";
$result = mysqli_query($conn , $sql)
	or die ("Error cannot select data".
	mysqli_error($conn));
echo "<table border = 3px
		bordercolor = black		
		bgcolor = #FFFFFF		
		width='950' height='200'
		align = center>";
echo "<tr align = center>";
echo "<th>รหัสรายวิชา</th>";
echo "<th>ชื่อรายวิชาภาษาไทย</th>";
echo "<th>ชื่อรายวิชาภาษาอังกฤษ</th>";
echo "<th>หน่วยกิต</th>";
echo "<th>แก้ไขข้อมูล</th>";
echo "<th>ลบข้อมูล</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr align = left>";
	echo " <td><b><center>".$row['d_id2']."</td>";
	echo " <td><b><left>".$row['d_name']."</td>";
	echo " <td><b><left>".$row['d_eng']."</td>";
	echo " <td><b><center>".$row['d_credit']."</td>";
	echo "<td><center><a href='update_form.php?d_id=".$row['d_id']."'>
	<img src='edit.png' width='20px' height='20px'></a></td>";
	echo "<td><center><a href='delete.php?d_id=".$row['d_id']."'
	onclick='return confirm(\"คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?\")'>
	<img src='delete.png' width='20px' height='20px'></a></td>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<a href="insert_form.php"><center>เพิ่มข้อมูล</center></a>