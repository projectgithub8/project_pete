<?php
require 'conn.php';
$std_id = $_GET['std_id'];
$sqlpro = "select * from standard_2 where std_id = '$std_id' ";
$respro = mysqli_query($conn, $sqlpro);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>แก้ไขข้อมูลเกณฑ์การประเมิน</title>
        <style>   /*--เพิ่ม style เข้ามาด้วย*/
            label{
                display: block;
            }
        </style>
    </head>
	<center>
    <body> 
        <h2>แก้ไขข้อมูลเกณฑ์การประเมิน</h2>
		<form action = "update_course_asm.php" method = "post" enctype = "multipart/form-data" id = "form1">
            <fieldset style = "width : 470px; height : 250px;" >
			<table align = center width = 450px border = "0">
                <legend><b style = "font-size : 20px">แก้ไขข้อมูลเกณฑ์การประเมิน</legend>
				<input name="std_id" type="hidden" id="std_id" size="20" value="<?=$rowpro['std_id']?>">
				<center>
				<td>
				<tr><td><label><b>มาตรฐานการเรียนรู้</label></td><td><input name="standard_name" type="text" id="standard_name"  value="<?=$rowpro['standard_name']?>"></td></tr>  
                <tr><td><label><b>รหัสมาตรฐานย่อย</label></td><td><input name="id_small" type="text" id="id_small"  value="<?=$rowpro['id_small']?>"></td></tr> 
				<tr><td><label><b>ชื่อมาตรฐานการเรียนรู้ย่อย </label></td><td><input name="std_name" type="text" id="std_name"  value="<?=$rowpro['std_name']?>"></td></tr>
				<tr><td><label><b>เกณฑ์ประเมิน </label></td><td><input name="choose" type="checkbox" id="choose"  value="choose"<?=$rowpro['choose']?>"></td></tr>
				<input type="hidden" id="std_id" value = <?php echo $rowpro['std_id'];?>>
				<tr><td><b> </td><td> </td></tr>
				<tr><td><b></td>
				<td><input type= "submit" value="แก้ไข">
				<input type= "reset" value="ยกเลิก"><br></td></tr>
            </fieldset>
         </form>
    </body>
	</center>
</html>