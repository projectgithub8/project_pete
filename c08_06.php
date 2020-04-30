<?php
$file = fopen("data08.txt","r");
$txt = fread($file,5);
echo "read 1:".$txt."<BR>";
rewind($file);
$txt = fread($file,5);
fseek($file,3);
echo "read 2:".$txt."<BR>";
$txt = fread($file,5);
echo "read 3:".$txt."<BR>";
echo "Pointer : ".ftell($file);
fclose($file);
?>
