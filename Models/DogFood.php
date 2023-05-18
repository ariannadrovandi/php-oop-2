<?php

include_once __DIR__.'/Product.php';
include_once __DIR__.'/../Traits/Weightable.php';

class DogFood extends Product{
    use Weightable;

    public $type, $scadenza, $ingredienti;

    public function __construct(string $title, int $price ,string $image, string $type, string $scadenza, string $ingredienti){
        parent::__construct($title, $price, $image);

        $this->type = $type;
        $this->scadenza = $scadenza;
        $this->ingredienti = $ingredienti;
    }
}