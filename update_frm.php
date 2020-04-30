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
        <title>แก้ไขข้อมูลนักศึกษา</title>
        <style>   /*--เพิ่ม style เข้ามาด้วย*/
            label{
                display: block;
            }
        </style>
    </head>
	<center>
    <body> 
        <h2>แก้ไขข้อมูลนักศึกษา</h2>
		<form action = "update_frmstudent.php" method = "post" enctype = "multipart/form-data" id = "form1">
            <fieldset style = "width : 470px; height : 250px;" >
			<table align = center width = 450px border = "0">
                <legend><b style = "font-size : 20px">แก้ไขข้อมูลนักศึกษา</legend>
				<input name="ID" type="hidden" id="ID" size="20" value="<?=$rowpro['ID']?>">
				<center>
				<tr><td><label><b>กลุ่มวิชา : </label></td>
				<td>
                <?php
                    $sql="select * from group_sub";
                    $result= mysqli_query($conn,$sql);
                ?>
                <select name = "id_sub" id = "id_sub">
                    <option value = "">---กรุณาเลือกกลุ่มเรียน---</option>  
                    <?php
                        while ($row= mysqli_fetch_array($result, MYSQLI_NUM)) {
							if ( $rowpro['id_sub']== $row[0] ){
                                echo "<option value = '$row[0]' selected>$row[1]</option>";
							}else{
								echo "<option value = '$row[0]'>$row[1]</option>";
                            }								
                        }
                    ?>
                </select>
				<tr><td><label><b> รหัสรายวิชา: </label></td><td><input name="d_id2" type="text" id="d_id2"  value="<?=$rowpro['d_id2']?>"></td></tr>  
                <tr><td><label><b> ชื่อรายวิชาภาษาไทย:   </label></td><td><input name="d_name" type="text" id="d_name"  value="<?=$rowpro['d_name']?>"></td></tr> 
				<tr><td><label><b>ชื่อรายวิชาภาษาอังกฤษ: </label></td><td><input name="d_eng" type="text" id="d_eng"  value="<?=$rowpro['d_eng']?>"></td></tr>
				<tr><td><label><b>หน่วยกิต: </label></td><td><input name="d_credit" type="text" id="d_credit"  value="<?=$rowpro['d_credit']?>"></td></tr>
				<input type="hidden" id="d_id" value = <?php echo $rowpro['d_id'];?>>
				<input name="submit" type="submit" id="submit" value = "แก้ไขข้อมูลนักศึกษา"><br></td></tr>
            </fieldset>
         </form>
    </body>
	</center>
</html>