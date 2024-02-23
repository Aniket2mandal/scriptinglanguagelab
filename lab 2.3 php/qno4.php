<?php
function area($l,$b){
$a=$l*$b;
echo "The area of rectangle=".$a;
}
area($l=$_POST["num1"],$b=$_POST["num2"]);
?>