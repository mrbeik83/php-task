<?php 
    include "../models/Test.php";
    $product = new test("localhost","product","root","");
    $product->insert("mohammad","kermani");
?>