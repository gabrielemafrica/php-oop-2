<?php

//new class product
class Cibo extends Product {
    private $type;
    private $ingredients;

    public function __construct(
        $name, $price, $imgURL, $category,
        $type, $ingredients
        ) {
        
            parent::__construct($name, $price, $imgURL, $category);
        $this -> setType($type);
        $this -> setIngredients($ingredients);
    }

    //get and set
    public function getType() {
        return $this -> type;
    }
    public function setType($type) {
        $this -> type = $type;
    }
    public function getIngredients() {
        return $this -> ingredients;
    }
    public function setIngredients($ingredients) {
        $this -> ingredients = $ingredients;
    }
    
}