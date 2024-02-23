<?php
function arra($arr){
$sum=0;
// for ($i=0;$i<4;$i++){
    foreach($arr as $value){
    // $sum =$sum+$arr[$i];
    $sum=$sum+$value;

}
echo $sum;
}
 arra($arr=array(1,2,3,9));
?>
