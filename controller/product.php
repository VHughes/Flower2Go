<?php

class Product {
    private $productName, $cost, $quantity;

    function __construct ($name, $cst, $qty) {
        $this->productName = $name;
        $this->cost = $cst;
        $this->quantity = $qty;
         
    }
    
    public function getPName(){
        echo $this->productName;
    }
    
    public function getPCost(){
        echo $this->cost;
    }
    
    public function getPQuantity(){
        echo $this->quantity;
    }

    public function toHTML(){
    print_r ($this);
    }
    
}

$new_product = new Product(10, 20, 30);
echo $new_product->getPName();
echo $new_product->getPCost();
echo $new_product->getPQuantity();
?>