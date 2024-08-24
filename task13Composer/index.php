<?php
    require "./vendor/autoload.php";
    use Mrbeik\Project\users;
    use Mrbeik\Project\product;
    $fetch = new product("localhost","product","root","");
    var_dump($fetch->fetchAll()->fetch(PDO::FETCH_ASSOC));
    $info = new users("localhost","product","root","");
    echo "<br>"."<hr>";
    var_dump($info->showInfo()->fetch(PDO::FETCH_ASSOC));
?>