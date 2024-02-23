<?php
$a=$_GET["week"];
if($a>6){
    echo "the number entered is invalid number!!";
}
else{
switch($a){
    case 0:
        echo "Today is sunday";
        break;
        case 1:
            echo "Today is monday";
            break;
            case 2:
                echo "Today is tuesday";
                break;
                case 3:
                    echo "Today is wednesday";
                    break;
                    case 4:
                        echo "Today is Thursday";
            break;
            case 5:
                echo "Today is Friday";
    break;
    case 6:
        echo "Today is saturday";
break;
}
}
?>