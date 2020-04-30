<?php
//c04_02.php
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
if ($n2 != 0)
{
	$res = $n1/$n2;
}
else{
	$res = "Error devide by zero.";
}
echo "result = $res";
?>
