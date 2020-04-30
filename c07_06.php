<?php
// c07_06.php
$txt = "ฉันเห็น อีกควาย อีควาย Eควาย เดินมา";
echo "Before : ".$txt."<BR>";
$txt = str_replace("ควาย","****",$txt);
echo "After1 : ".$txt."<BR>";
$txt = str_replace("อี","****",$txt);
echo "After2 : ".$txt."<BR>";
?>