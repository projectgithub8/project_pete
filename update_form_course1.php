<?php
require 'conn.php';
$d_id = $_GET['d_id'];
$qpro = "select * from course where d_id = '$d_id' ";
$respro = mysqli_query($conn, $qpro);
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
				<tr><td><label><b> รหัสนักศึกษา: </label></td><td><input name="d_id" type="number" id="d_id"  value="<?=$rowpro['d_id']?>" disabled = ""></td></tr>  
                <tr><td><label><b> ชื่อนักศึกษา:   </label></td><td><input name="Std_Name" type="text" id="Std_Name"  value="<?=$rowpro['Std_Name']?>"></td></tr> 
				<tr><td><label><b>กลุ่มเรียน : </label>
				</td><td>
                <?php
                    $sql="select * from groupp";
                    $result= mysqli_query($conn,$sql);
                ?>
                <select name = "Group_ID" id = "Group_ID">
                    <option value = "">---กรุณาเลือกกลุ่มเรียน---</option>  
                    <?php
                        while ($row= mysqli_fetch_array($result, MYSQLI_NUM)) {
							if ( $rowpro['Group_ID']== $row[0] ){
                                echo "<option value = '$row[0]' selected>$row[1]</option>";
							}else{
								echo "<option value = '$row[0]'>$row[1]</option>";
                            }								
                        }
                    ?>
                </select></td></tr>
                <tr><td><label><b>คณะ : </label></td><td>
                <?php
                    $sql="select * from faculty";
                    $result= mysqli_query($conn,$sql);
                ?>
                <select name = "Faculty_ID" id = "Faculty_ID">
                    <option value = "">---กรุณาเเลือกคณะ---</option>   
                    <?php
                        while ($row= mysqli_fetch_array($result, MYSQLI_NUM)) {
							if ( $rowpro['Faculty_ID']== $row[0] ){
                                echo "<option value = '$row[0]' selected>$row[1]</option>";
							}else{
								echo "<option value = '$row[0]'>$row[1]</option>";
                            }
                        }
                    ?>
                </select></td></tr>
                <tr><td><label><b>ภาพนักศึกษา :</label></td>
                <td><input type = "file" name="Std_Pic"/ ></td></tr>
				<br>
                <td></td><td><p>
				<input type="hidden" id="d_id" value = <?php echo $rowpro['d_id'];?>>
				<input name="submit" type="submit" id="submit" value = "แก้ไขข้อมูลนักศึกษา"><br></td></tr>
            </fieldset>
         </form>
    </body>
	</center>
</html>