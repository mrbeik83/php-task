<?php
        include("../models/pruduct.php");
        include("../views/product/list.php");
        $query = new product("localhost","product","root","");
        Weiw($query->fetchAll());

    // function fetchById( $id ){
    //     include("../models/pruduct.php");
    //     include("../views/product/list.php");
    //     $query = new product("localhost","product","root","");
    //     $wi =  $query->fetchOneById($id);
    //     Weiw($wi);
    // }
    // function creatDb($name){
    //     include("../models/pruduct.php");
    //     $query = new product("localhost","product","root","");
    //     $query->creatDb($name);
    // }
    
    // creatDb('test');
    // insertToDb();
    // fetchAllDb();
    // fetchById(1);
    
?>