<?php

//new class product
class Product {
    private $name;
    private $price;
    private $imgURL;
    private $type;
    private $inStock;
    private Category $category;

    public function __construct($name, $price, $imgURL, $type, $inStock, Category $category) {

        $this -> setName($name);
        $this -> setPrice($price);
        $this -> setImgURL($imgURL);
        $this -> setType($type);
        $this -> setInStock($inStock);
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
    public function getType() {
        return $this -> type;
    }
    public function setType($type) {
        $this -> type = $type;
    }
    
    public function getInStock() {
        return $this -> inStock;
    }
    public function setInStock($inStock) {
        $this -> inStock = $inStock;
    }
    public function getCategory() {
        return $this -> category;
    }
    public function setCategory($category) {
        $this -> category = $category;
    }


}