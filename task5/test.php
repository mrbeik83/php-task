<?php
    $arr = $_POST;
    if (isset($arr["username"]) && $arr["password"]){
        print_r($arr);
    $info = json_encode($arr);
    echo "<br>";
    echo "<hr>";
    print_r($info);
    echo "<br>";
    echo "<hr>";
    $objs = json_decode($info);
    print_r($objs);
    echo "<br>";
    // echo $objs("username");
    echo "<hr>";
    $arrjs = json_decode($info,true);
    print_r($arrjs);
    echo "<br>";
    echo "password : ".$arrjs["password"];
    echo "<hr>";
    }
    else{
        echo"No information entered";
    }
    ?>