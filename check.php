<?php
session_start();
include_once('conn.php');
$uname = $_POST["uname"];
$pass = $_POST["pass"];
$sql = ("SELECT
		CONCAT ('คุณ',first,' ',last) name
		FROM employee
		WHERE email = '$uname'
		AND pass = PASSWORD ('$pass')");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
//echo $sql; 	
$num = mysqli_num_rows($res);
if ($num == 0)
{
	echo "<script>
			alert('ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง !');
			window.location='login.php';
			</script>";	
}else{
$row = mysqli_fetch_array($res);
	$_SESSION["login_true"] = $row["name"];
	echo "<script>
			alert('Welcome ".$row["name"]."');
			window.location='select.php';
			</script>";	
}
mysqli_free_result($res);
mysqli_close($conn);
?>