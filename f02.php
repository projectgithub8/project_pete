<?php //f02.php

function Price ($pri,$amt)
{
	return $pri*$amt;
}
function Vat($total,$vat)
{
	return $total*$vat/100;
}
$pri = $_GET["pri"];
$amt = $_GET["amt"];
echo "ราคารวม  =  ".Price($pri,$amt)."<BR>";
echo "ภาษี = ".Vat(Price($pri,$amt),7);
?>