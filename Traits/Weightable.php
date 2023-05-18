<?php
trait Weightable{
    protected $weight;

    public function getWeight(){
        if($this->weight){
            return $this->weight;
        }else{
            return 'Peso non impostato';
        }
        
    }

    public function setWeight($weight, $unit){

        if(!is_numeric($weight)){
            throw new Exception('Is not a number');
        }
            
        
        $this->weight = $weight.$unit;
    }
}