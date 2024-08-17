<?php

    namespace Mrbeik\Project;
    class baseModel{

        public $servername ;
        public $dbname ;
        public $username ;
        public $password ;
        public $conn ;
        public function __construct($servername,$dbname, $username, $password){
            $this->servername = $servername;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
            // $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username,$this->password);
        }
        

        
    }
    
?>