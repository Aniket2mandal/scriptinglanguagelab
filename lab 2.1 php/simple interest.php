<?php
// $p=(int)readline("Enter the principle");
// $t=(int)readline("Enter the time");
// $r=(float)readline("Enter the rate of interest");
$p=$_GET["principle"];
$t=$_GET["time"];
$r=$_GET["rate"];
$s=($p*$t*$r)/100;
echo "Simple Interest=".$s;
?>