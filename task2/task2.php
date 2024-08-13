<?php
    // for function
    function Forch($num){
        for($i = 0; $i <= 10; $i++){
            echo $num;
            echo "<br>";
            echo "<hr>";
        }
    }
    //swith function
    function Switche ($var) {
        switch($var){
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
            
    }
    //ifElse function
    function ifels(){
        echo "<br>";
        echo "<hr>";
        define("Age",28);
        if(Age > 20)
        {
           echo "how are you";
        }
        else if(Age == 20)
        {
            echo "hello my friend";
        }
        else
        {
            echo "you are young";
        }
        echo "<br>";
        echo "<hr>";
    }
    // sum function
    function Sume(...$args){
            return array_sum($args);
        }
    // test functions
    Forch(20);
    Switche("thursday");    
    ifels();
    print_r(Sume(10,20,102,202));
?>