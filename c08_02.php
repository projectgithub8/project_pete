<?php
$file = fopen("data08.txt","r");
while(!feof($file))
{
$txt = fgets($file);
echo $txt."<BR>";
}
fclose($file);
?>