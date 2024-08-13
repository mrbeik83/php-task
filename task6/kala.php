<?php
    class Kala
    {   
        public $productName ;
        public $material ;
        public $width ;
        public $number ;
        public $price ;
        public function __construct($productName,$material,$width,$number,$price){
            $this->productName=$productName;
            $this->material=$material;
            $this->width=$width;
            $this->number=$number;
            $this->price=$price;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getProductName(){
            return $this->productName;
        }
        public function getMaterial(){
            return $this->material;
        }
        public function getWidth(){
            return $this->width;
        }
        public function getNumber(){
            return $this->number;
        }
    }
?>