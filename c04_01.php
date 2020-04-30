<?php
//c04_01.php
	$h = $_GET["height"];
	if($h > 0)
	{
		$h = $h/100;
	}
	echo "height = ".$h." M<BR>";
?>
