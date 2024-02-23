<?php
$n=$_GET["num"];
if($n>0){
    echo $n."\n"."is positive number";
}
elseif($n<0){
    echo $n."\n"."is negative number";
}
else{
    echo $n."\n"."is zero";
}
?>