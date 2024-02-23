<?php
$a=$_GET["num1"];
$b=$_GET["num2"];
$c=$_GET["num3"];
$d=$_GET["num4"];
// $g=($a>$b)?$a:$b;
// $g1=($c>$d)?$c:$d;
// $G=($g>$g1)?$g:$g1;
// echo $G;
 $g=max($a,$b,$c,$d);
 echo $g;
?>