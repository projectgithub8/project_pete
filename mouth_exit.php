<?php
session_start();
session_destroy();
header("location:mouth_form.php");
exit();
?>