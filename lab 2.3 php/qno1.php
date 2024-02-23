<?php
function add($a,$b){
    $sum=$a + $b;
    echo "The sum is:".$sum;
}
add($a=$_POST["num1"],$b=$_POST["num2"]);

?>