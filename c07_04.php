<?php
// c07_04.php
$txt = $_POST["name"];
$name = substr($txt,0,strpos($txt," "));
$surname = trim(substr($txt,strpos($txt," ")));
echo $txt."<BR>";
echo "Name : ".$name."<BR>";
echo "Surname : ".$surname."<BR>";
?>