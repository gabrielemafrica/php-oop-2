<?php

//new class product
class Category {
    private $category;
    private $icon;


    public function __construct($category, $icon) {

        $this -> setCategory($category);
        $this -> setIcon($icon);
    }

    //get and set
    public function getCategory() {
        return $this -> category;
    }
    public function setCategory($category) {
        $this -> category = $category;
    }
    public function getIcon() {
        return $this -> icon;
    }
    public function setIcon($icon) {
        $this -> icon = $icon;
    }
}