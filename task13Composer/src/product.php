<?php
    namespace Mrbeik\Project;
    use Mrbeik\Project\baseModel;
    
    class product extends baseModel{
        public function insert($mahsool,$material,$size,$number,$price){
            $sql = "INSERT INTO product1 (productName,Material,sizeKala,numberKala,Price)VALUES(?,?,?,?,?)";
            $query = $this->conn->prepare($sql);
            $query->execute(array($mahsool,$material,$size,$number,$price));
        }
        // نمایش همه ی اطلاعات
        public function fetchAll(){
            $qu = $this->conn->query("SELECT * FROM product1");
            return $qu;
    }
    }

?>