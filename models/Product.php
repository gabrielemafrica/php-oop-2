<?php

//new class product
class Product {
    private $name;
    private $price;
    private $imgURL;
    private Category $category;

    public function __construct($name, $price, $imgURL, $category) {

        $this -> setName($name);
        $this -> setPrice($price);
        $this -> setImgURL($imgURL);
        $this -> setCategory($category);
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
    public function getCategory() {
        return $this -> category;
    }
    public function setCategory($category) {
        $this -> category = $category;
    }


}