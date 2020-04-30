<?php
$file = fopen("data08.txt","r");
$txt = fread($file,10);
echo $txt."<BR>";
$txt = fread($file,10);
echo $txt."<BR>";
fclose($file);
?>