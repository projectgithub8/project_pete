<?php
$i = 0; //จำนวนเต็ม
while($i<=100)
{
	echo $i.",";
	$i++;	
}
echo "<BR>";

$i = 0; //คู่
while($i<=100)
{
	echo $i.",";
	$i=$i+2;
}
echo "<BR>";

$i = 1; //คี่
while($i<=100)
{
	echo $i.",";
	$i=$i+2;
}
echo "<BR>";
$i = 100; //จำนวนเต็ม
while($i<=100 && $i>0)
{
	echo $i.",";
	$i=$i-2;	
}
echo "<BR>";
 ?>
