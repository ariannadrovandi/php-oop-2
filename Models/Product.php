<?php
class Product{
    public string $title;
    public int $price;
    public string $image;
   
    public function __construct( string $title, int $price ,string $image){
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;

    }
    
}