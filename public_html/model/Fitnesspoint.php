<?php

class Fitnesspoint{
    private $value = 0;
    private $id = 0;
    
    public function getValue(){
        return $this->value;
    }
    
    public function setValue($value){
       $this->value = $value;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($value){
        $this->id = $value;
    }
}
?>