<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:2px solid black;
        }
        th{
            border:2px solid black;
        }
        td{
            border:2px solid black;
        }
        </style>
</head>
<body>
<?php
$info=array(array('Aniket','Janakpur','BCA'),
array('Linda','Hetauda','BCA'),
array('sachin','udaypur','BCA'));
echo "<table>";
echo "<tr>";
echo "<th>"."Name"."</th>";
echo "<th>"."Address"."</th>";
echo "<th>"."Faculty"."</th>";
echo "</tr>";

for($i=0;$i<=2;$i++){
        echo "<tr>";
        for($j=0;$j<=2;$j++){
        echo "<td>" .$info[$i][$j] ."</td>";
    }
    echo "</tr>";
}
?>
</body>
</html>

