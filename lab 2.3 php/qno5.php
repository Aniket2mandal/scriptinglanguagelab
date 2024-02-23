<?php
function factorial($a){
if($a==0){
    return 1;
}
else{
    return $a*factorial($a-1);
}
}
echo factorial($a=$_POST["num1"]);

?>