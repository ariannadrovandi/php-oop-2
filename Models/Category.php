<?php

class Category{
    public string $type;
    public string $genre;
    public function __construct(string $type, string $genre){
        $this->type = $type;
        $this->genre = $genre;
    }

    
}