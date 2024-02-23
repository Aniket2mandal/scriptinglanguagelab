<?php
function SI($a,$b,$c){
    $i=($a*$b*$c)/100;
echo "The interest of the given principle =".$i;
}
SI($a=$_POST["num1"],$b=$_POST["num2"],$c=$_POST["num3"]);
?>







