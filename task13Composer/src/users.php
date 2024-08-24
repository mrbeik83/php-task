<?php
    namespace Mrbeik\Project;
    class users extends baseModel{        
        public $name;
        public $family;

        public function showInfo(){
            $qu = $this->conn->query("SELECT * FROM users");
            return $qu;
        }

    }
?>