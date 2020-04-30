<?php
// authen.php
session_start();
if (!isset($_SESSION["login_true"]))
{
		echo "<script>
		alert('Please login to system.');
		window.location='login.php';
		</script>";
}
?>