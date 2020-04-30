<?php
$file = fopen("data08.txt","a+");
fputs($file,"Hi Bingo\n<BR>");
fputs($file,"How R U to day?\n");
fclose($file);
$file = fopen("data08.txt","r");
?>
<textarea rows="10" cols="50">
<?php
fpassthru($file);
?>
</textarea>