<?php
    require "./vendor/autoload.php";
    use Mrbeik\Project\users;

    $info = new users("mohammad","beikyazdi");
    var_dump($info);
    echo "<br>";
    $info->showInfo();
?>