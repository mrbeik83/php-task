<?php

$dayOfWeek = "sunday";
echo $dayOfWeek."<br>";


switch($dayOfWeek){
    case "saturday":
        echo "شنبه";
    break;
    case "sunday":
        echo "یکشنبه";
    break;
    case "monday":
        echo "دوشنبه";  
    break; 
    case "tuesday":
        echo "سه شنبه";
    break;
    case "wednesday":
        echo "چهارشنبه<br>";
    break;
    case "thursday":
        echo "پنج شنبه<br>";
    break;
    case "friday":
        echo "جمعه<br>"; 
    break;
        default:
        echo "روزی پیدا نشد!!!";      
}