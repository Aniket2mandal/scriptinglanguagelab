<?php
function factorial($a){
$factorial=1;
for($i=1;$i<=$a;$i++){
    $factorial *=$i;
}
echo "The factorial of the number is=".$factorial;
}
factorial($a=$_POST["num1"]);

?>