<?php

//new class product
class Category {
    private $categoryName;
    private $icon;


    public function __construct($categoryName, $icon) {

        $this -> setCategory($categoryName);
        $this -> setIcon($icon);
    }

    //get and set
    public function getCategoryName() {
        return $this -> categoryName;
    }
    public function setCategory($categoryName) {
        $this -> categoryName = $categoryName;
    }
    public function getIcon() {
        return $this -> icon;
    }
    public function setIcon($icon) {
        $this -> icon = $icon;
    }
}