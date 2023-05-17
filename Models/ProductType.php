<?php
include __DIR__ . '/Product.php';
include __DIR__ . '/Category.php';

class ProductType extends Product
{
    public string $animal_type;

    public object $category;

    public function __construct( string $title, int $price ,string $image, Category $category){
        parent::__construct($title, $price , $image);
        $this->category = $category;
    }

}