<?php
require 'conn.php';
$d_id = $_GET['d_id'];
$sqlpro = "select * from course where d_id = '$d_id' ";
$respro = mysqli_query($conn, $sqlpro);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>แก้ไขข้อมูลรายวิชา</title>
        <style>   /*--เพิ่ม style เข้ามาด้วย*/
            label{
                display: block;
            }
        </style>
    </head>
	<center>
    <body> 
        <h2>แก้ไขข้อมูลรายวิชา</h2>
		<form action = "update_course.php" method = "post" enctype = "multipart/form-data" id = "form1">
            <fieldset style = "width : 470px; height : 250px;" >
			<table align = center width = 450px border = "0">
                <legend><b style = "font-size : 20px">แก้ไขข้อมูลรายวิชา</legend>
				<input name="d_id" type="hidden" id="d_id" size="20" value="<?=$rowpro['d_id']?>">
				<center>
				<tr><td><label><b>ลำดับ</label></td><td><input name="std_id" type="text" id="std_id"  value="<?=$rowpro['std_id']?>"></td></tr>  
                <tr><td><label><b>มาตรฐานการเรียนรู้</label></td><td><input name="standard_name" type="text" id="standard_name"  value="<?=$rowpro['standard_name']?>"></td></tr> 
				<tr><td><label><b>รหัสมาตรฐานย่อย</label></td><td><input name="id_small" type="text" id="id_small"  value="<?=$rowpro['id_small']?>"></td></tr>
				<tr><td><label><b>ชื่อมาตรฐานการเรียนรู้ย่อย</label></td><td><input name="std_name" type="text" id="std_name"  value="<?=$rowpro['std_name']?>"></td></tr>
                <tr><td><label><b>คลิกเกณฑ์ประเมิน</label></td><td><input name="choose" type="text" id="choose"  value="<?=$rowpro['choose']?>"></td></tr>
				<input type="hidden" id="d_id" value = <?php echo $rowpro['d_id'];?>>
				<tr><td><b> </td><td> </td></tr>
				<tr><td><b></td>
				<td><input type= "submit" value="แก้ไข">
				<input type= "reset" value="ยกเลิก"><br></td></tr>
            </fieldset>
         </form>
    </body>
	</center>
</html>