<?php
    include("db_connect.php");
    class InsertDb extends Db_connect{
        
        public function insert($mahsool,$material,$size,$number,$price){
            $sql = "INSERT INTO product (productName,Material,sizeKala,numberKala,Price)VALUES(?,?,?,?,?)";
            $query = $this->getConn()->prepare($sql);
            $query->execute(array($mahsool,$material,$size,$number,$price));
        }
        
    }

?>