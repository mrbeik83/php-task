<?php
include("switch.php");
echo "<hr>";
$age = 22;
if($age > 20)
{
    for ($i=0; $i < $age; $i++) { 
        echo "<br>";
        print_r($age);
    }
}
else if($age == 20)
{
    echo "hello my friend";
}
else
{
    echo "you are young";
}
?>