<?php
$dim=3;
for($row=0; $row<$dim; $row++)
{
	for($col=0; $col<$dim; $col++)
	{
			$arr[$row][$col] = $dim*$row+$col;
				echo $arr[$row][$col].",";
	}
	echo "<BR>";
}
?>
