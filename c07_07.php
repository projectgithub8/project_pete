<?php
// c07_07.php
$row = explode(" ",$_POST["name"]);
echo "name : ".$row[0]."<BR>";
echo "surname : ".$row[1]."<BR>";
$curday = date("Y-m-d");
echo $curday."<BR>";
$cd = explode("-",$curday);
echo $cd[2]."/".$cd[1]."/".$cd[0];
?>