<?php
$fname = "data08.txt";
if (file_exists($fname))
{
	$file=fopen($fname,"r");
	while(!feof($file))
	{
		echo fgets($file);
	}
	fclose($file);
}
else
{
	echo $fname." file not found!";
}
?>
