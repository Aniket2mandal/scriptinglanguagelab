<?php

$student=array(array("Jennifer Kimbers","abc@gamil.com","Seatle","Wasington"),
array("Rodney Hutchers","def@gamil.com","Los Angeles","california"),
array("Robert Smith","ghi@gmail.com","Michign","Missouri"));
echo "WITHOUT USING FOR LOOP"."<br>"."<br>";
// echo $student[0][0]."<br>";
// echo $student[0][1]."<br>";
// echo $student[0][2]."<br>";
// echo $student[0][3]."<br>"."<br>";

// echo $student[1][0]."<br>";
// echo $student[1][1]."<br>";
// echo $student[1][2]."<br>";
// echo $student[1][3]."<br>"."<br>";

// echo $student[2][0]."<br>";
// echo $student[2][1]."<br>";
// echo $student[2][2]."<br>";
// echo $student[2][3]."<br>"."<br>";

// echo $student[3][0]."<br>";
// echo $student[3][1]."<br>";
// echo $student[3][2]."<br>";
// echo $student[3][3]."<br>"."<br>";

echo "NOW USING FOREACH LOOP"."<br>"."<br>";

// foreach($student as $name)
// {echo "<br>";
//     foreach($name as $people){
//     echo $people."<br>";
// }
// }
$arrlenght=count($student);
for($i=0;$i<$arrlenght;$i++){
    for($j=0;$j<$arrlenght;$j++){
        echo $student[$i][$j]."\n"."\t";
    }
    echo "<br>";
}
?>