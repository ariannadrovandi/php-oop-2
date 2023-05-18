<?php
include_once __DIR__.'/../Traits/Weightable.php';

class Person{
    use Weightable;
    public $altezza;

    public function __construct(float $altezza){
        $this->altezza = $altezza;
    }
}