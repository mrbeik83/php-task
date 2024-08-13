<?php 
include "redbean/rb.php";
    class BaseModel{
        public $servername ;
        public $dbname ;
        public $username ;
        public $password ;
        public function __construct($servername,$dbname, $username, $password){
            $this->servername = $servername;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
            R::setup("mysql:host=$servername;dbname=$dbname", "$username", "$password");
        }
        public function __destruct(){
            R::close();
        }
        // function connectDb(){
        //     R::setup('mysql:host=localhost;dbname=product', 'root', '');
        // }
        // function dcConnectDbDB()
        // {
        //     R::close();
        // }
    }
?>