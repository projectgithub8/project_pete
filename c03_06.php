<?php
$prov = array("BKK"=>"Bangkok","CHM"=>"Chaing Mai","TRD"=>"Trad");
echo $prov["BKK"]."<BR>";

while($rec = each($prov) )
{
	echo $rec["key"]."=".$rec["value"]."<BR>";
}
reset($prov);
while(list($code,$name) = each($prov) )
{
	echo $code."=".
		$name."<BR>";
}
?>
