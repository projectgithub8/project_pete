<?php
// c07_02.php
$mail = $_POST["email"];
$comm = $_POST["comment"];
echo "จากคุณ".$mail."<BR>";
echo "ข้อเสนอ :".nl2br($comm)."<BR>";
?>