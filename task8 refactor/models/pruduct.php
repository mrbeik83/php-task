<?php
    include("BaseModel.php");
    class product extends BaseModel{
        // درست   کردن  دیتا بیسس
        public function creatDb($name){
            $query = "CREATE DATABASE '$name'";
            $this->getConn()->query($query);
        }
        // درست کردن  تیبل برای دیتا بیس
        public function addTable($name){

        }
        // اضافه کردن یک سطر به تیبل
        public function insert($mahsool,$material,$size,$number,$price){
            $sql = "INSERT INTO product1 (productName,Material,sizeKala,numberKala,Price)VALUES(?,?,?,?,?)";
            $query = $this->getConn()->prepare($sql);
            $query->execute(array($mahsool,$material,$size,$number,$price));
        }
        // نمایش اطلاعات کاربر با استفاده از آی دی
        public function fetchOneById($id){
            $conn = $this->getConn();
            $qu = $conn->query("SELECT * FROM product1 WHERE id = '$id'");
            return $qu;
        }
        // نمایش کامل جدول اطلاعاتی کاربران
        public function fetchAll(){
            $conn = $this->getConn();
            $qu = $conn->query("SELECT * FROM product1");
            return $qu;
        }
        
}
?>