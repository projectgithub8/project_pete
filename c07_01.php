<?php
// c07_01.php Itrim นับข้างหลัง chop นับข้างหน้า
$txt = "\n\n ITS RUS \n\n\n\n";
echo "Before : ".strlen($txt)."<BR>";
$txt = ltrim($txt); 
echo "After : ".strlen($txt)."<BR>";
?>