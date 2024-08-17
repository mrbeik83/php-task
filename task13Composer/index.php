<?php
    require "./vendor/autoload.php";
    use Mrbeik\Project\users;
    use Mrbeik\Project\product;
    $fetch = new product("localhost","product","root","");
    var_dump($fetch);
    // $info = new users("mohammad","beikyazdi");
    // var_dump($info);
    // echo "<br>";
    // $info->showInfo();
?>