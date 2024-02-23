<?php
$a=$_GET["grade"];


switch($a){
    case ($a<25):
        echo "Not good ** you secured F GRADE";
        break;
        case ($a>=25 && $a<45):
            echo "Not good ** you secured E GRADE";
            break;
            case ($a>=45  && $a<50):
                echo "Not good ** you secured D GRADE";
                break;
                case ($a>=50 && $a<60):
                    echo "Progress hard !! you secured C GRADE";
                    break;
                    case ($a>=60 && $a<80):
                        echo "Very good!! you secured B GRADE";
            break;
            case ($a>=80):
                echo "Excellent!! you secured A GRADE";
    break;
}

?>