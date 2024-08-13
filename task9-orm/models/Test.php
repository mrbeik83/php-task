<?php 
    include "BaseModel.php";
    class test extends BaseModel{
        function insert($name,$family){
            $test = R::dispense('test1');
            $test['name'] = $name;
            $test['family'] = $family;
            R::store($test);
        }
    }
?>