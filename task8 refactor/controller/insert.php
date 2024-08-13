<?php
    include("../models/pruduct.php");
    $insert = new product("localhost","product","root","");
    $insert->insert($_POST["productName"],$_POST["material"],$_POST["width"],$_POST["number"],$_POST["price"]);
    
    header("location:/php/task1-main/task8%20refactor/views/Html/");
?>