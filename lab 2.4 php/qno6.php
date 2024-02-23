<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qno6</title>
    <style>
table{
    border:2px solid black;
}
th{
    border:2px solid black;
}
tr{
    border:2px solid black;
}
td{
    border:2px solid black;
}
        </style>
</head>
<body>
  <?php
  $array=array(array('NewYork',88008278),
  array('Los Angeles',3694820),
  array('Chicago',2896016),
  array('Houston',194874),
  array('Philadephia',151797886),
  array('Phoenix',132149093),
  array('Dallas',118839275));
  echo "<table>";
  echo "<tr>";
  echo "<th>"."City"."</th>";
  echo "<th>"."Population"."</th>";
  echo "</tr>";
  for($i=0;$i<=1;$i++){
echo "<tr>";
for($j=0;$j<=1;$j++){
 echo "<td>".$array[$i][$j]."</td>";
}
echo "</tr>";
  }
  ?>
</body>
</html>