<?php
    function insertToDb(){
        include("insertDb.php");
        $insert = new InsertDb("localhost","store","mr_beik","0927193329");
        $insert->insert($_POST["productName"],$_POST["material"],$_POST["width"],$_POST["number"],$_POST["price"]);
    }
    function fetchAllDb(){
        include("fetch.php");
        $query = new FetchAll("localhost","store","mr_beik","0927193329");
        $query->fetchAsoc();

    }
    function fetchById( $id ){
        include("fetch.php");
        $query = new fetchOne("localhost","store","mr_beik","0927193329");
        $query->fetchOneById($id);
    }
    insertToDb();
    fetchAllDb();
    // fetchById(1001);
    
?>