<?php
$pro = array (array("code"=>"BKK","amp"=>36)
,array("code"=>"CHM","amp"=>10)
,array("code"=>"TRD","amp"=>15));
for($i=0; $i<3; $i++)
{
	echo $pro[$i]["code"]."=".
	$pro[$i]["amp"]."<BR>";
}
?>
