<?php
    $arr1 = array(10,20,1,5,25,30);
    $arr2 = array("name" => "reza" , "family" => "beik", "age");
    $num1 = 15;
    $num2 = 20;
    function addToArray($num,$arr){
        array_push($arr,$num);
        return $arr;
    }
    print_r(addToArray(50,$arr1));
    echo "<hr>";
    echo "<br>";
    //next functions

    function findElementInArray($arr,$num){
        return array_search($num,$arr);
    }
    var_dump(findElementInArray($arr1,$num1));
    echo "<br>";
    var_dump(findElementInArray($arr1,$num2));
    echo "<br>"."The second type"."<br>";
    function findElementInArray1($arr,$num){
        return in_array($num,$arr);
    }
    var_dump(findElementInArray1($arr1,$num1));
    echo "<br>";
    var_dump(findElementInArray1($arr1,$num2));
    echo "<hr>";
    echo "<br>";
    //next function

    function removeFromArray1($arr,$index,$num){
        array_splice($arr,$index,$num);
        print_r($arr);
    }
    removeFromArray1($arr1,1,2);
    
    echo "<br>"."The second type"."<br>";
    function removeFromArray2($arr,$num){
        unset($arr[$num]);
        print_r($arr);
    }
    removeFromArray2($arr1,0);
    
    echo "<br>"."The second type"."<br>";
    function removeFromArray3($arr){
        print_r(array_pop($arr));
        echo "<br>";
        print_r($arr);
    }
    removeFromArray3($arr1);

    echo "<br>"."The second type"."<br>";
    function removeFromArray4($arr){
        print_r(array_shift($arr));
        echo "<br>";
        print_r($arr);
    }
    removeFromArray4($arr1);
    echo "<hr>"."<br>";

    //next function


    function extractKeysFromArray1($arr){
        return array_keys($arr);
    }
    print_r(extractKeysFromArray1($arr1));
    echo "<br>"."The second type"."<br>";
    function extractKeysFromArray2($arr,$value){
        return array_keys($arr,$value);
    }
    print_r(extractKeysFromArray2($arr1,30));
    echo "<hr>";
    echo "<br>";
    
    function extractValuesFromArray($arr){
        extract($arr);
        echo "\$name = $name , \$family = $family";
    }
    extractValuesFromArray($arr2);
    echo "<hr>";
    echo "<br>";
    function mergingToArray($arr1,$arr2){
        return array_merge($arr1,$arr2);
    }    
    print_r(mergingToArray($arr1,$arr2));
    echo "<br>"."The second type"."<br>";
    
    
    $arr3 = array(10,11,12,13,14,16,18);
    $arr4 = array(11,12,13,14,15,17,19);
    function getDiffrenBetween2Array($arr1,$arr2){
        return array_diff($arr1,$arr2);
    }
    print_r(getDiffrenBetween2Array($arr3,$arr4));
    echo "<br>";
    print_r(getDiffrenBetween2Array($arr4,$arr3));
    echo "<br>"."The second type"."<br>";

    function usingArrayInterestKey($arr1,$arr2){
        return array_intersect($arr1,$arr2);
    }
    print_r(usingArrayInterestKey($arr4,$arr3));
    




    
?>