<?php
$len=$_GET["length"];
$bred=$_GET["breadth"];
if($len==$bred){
    echo "the shape is square"."<br>";
    $per=4*$len;
    echo "perimeter=".$per;

}
else{
    echo "the shape is rectangle"."<br>";
    $peri=2*($len+$bred);
    echo "perimeter=".$peri;
}
?>