<?php
function cube($n){
    echo $n**3 ."<br>";
}
cube(2);
//call by refrence
function add(&$x){
    
    $x++;
}
//$x=5;
add($x);
echo $x."<br>";

//recursive function
 function factorial($n){
    if($n<=1){
        return 1;
    }
    else{
        return $n*factorial($n-1);
    }
 }
 echo "factorial =  ".factorial(5);

 //pow(),sqrt(),max(in array),min(in array),implode(),explode()
?>