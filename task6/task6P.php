<!DOCTYPE html>
<html lang="fa" dir = "rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    
</body>
</html>
<?php
    include("kala.php");
    $kalaclass = new Kala($_POST["productName"],$_POST["material"],$_POST["width"],$_POST["number"],$_POST["price"]);
    echo"<h1> مشخصات کالا </h1>";
    echo "<h2>"."نام کالا  = ".$kalaclass->getProductName()."</h2>"."<br>";
    echo "<h2>"."جنس کالا  = ".$kalaclass->getMaterial()."</h2>"."<br>";
    echo "<h2>"."ساز کالا  = ".$kalaclass->getWidth()."</h2>"."<br>";
    echo "<h2>"."تعداد کالا  = ".$kalaclass->getNumber()."</h2>"."<br>";
    echo "<h2>"."قیمت کالا  = ".$kalaclass->getPrice()."</h2>"."<br>";
?>