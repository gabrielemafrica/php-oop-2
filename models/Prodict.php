<?php

//new class product
class Product {
    private $name;
    private $price;
    private $imgURL;
    private $type;

    public function __construct($name, $price, $imgURL, $type) {
        
        $this -> setName($name);
        $this -> setPrice($price);
        $this -> setImgURL($imgURL);
        $this -> setType($type);
    }

    //get and set
    public function getName() {
        return $this -> name;
    }
    public function setName($name) {
        $this -> name = $name;
    }
    public function getPrice() {
        return $this -> price;
    }
    public function setPrice($price) {
        $this -> price = $price;
    }
    public function getImgURL() {
        return $this -> imgURL;
    }
    public function setImgURL($imgURL) {
        $this -> imgURL = $imgURL;
    }
    public function getType() {
        return $this -> type;
    }
    public function setType($type) {
        $this -> type = $type;
    }


}