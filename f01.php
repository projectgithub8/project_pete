<?php //f01.php
function hello ($txt)
{
	return "Hello ".$txt;
}
$name = $_GET["std"];
$mess = hello($name);
echo "Mess : ".$mess;

?>