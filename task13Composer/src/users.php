<?php
    namespace Mrbeik\Project;
    class users{        
        public $name;
        public $family;

        public function __construct($name,$family){
            $this->name = $name;
            $this->family = $family;
        }
        public function showInfo(){
            echo $this->name;
        }

    }
?>