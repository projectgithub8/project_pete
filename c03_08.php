<?php
$pro = array(array("BKK","Bangkok",36),array("CHM","Chaing",10),array("TRD","Trad",15));
for($i=0; $i<3; $i++)
{
	for($j=0; $j<3; $j++)
	{
		echo $pro[$i][$j]."=";
	}
	echo "<BR>";
}
?>