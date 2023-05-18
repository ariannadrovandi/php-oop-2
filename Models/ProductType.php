<?php
include __DIR__ . '/Product.php';
include __DIR__ . '/Category.php';

class ProductType extends Product{
    public string $animal;
    public $category;
    public $icons = [
        'dog',
        'cat',
    ];

    public function __construct( string $title, int $price ,string $image, string $animal, Category $category){
        parent::__construct($title, $price , $image);
        $this->animal = $animal;
        $this->category = $category;
    }

    public function getIcon()
    {
        if (in_array($this->animal, $this->icons)) {
            return "<i class='fs-3 fa-solid fa-$this->animal'></i>";
        } else {
            return "<span><i class='fa-regular fa-transporter-empty'></i></span>";
        }
    }
}