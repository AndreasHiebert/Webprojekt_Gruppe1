<?php

class Achievement{
    private $name="";
    private $id=0;
    private $code="";
    private $description="";
    private $type=0;
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($value){
        $this->name = $value;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($value){
        $this->id = $value;
    }
    
    public function getCode(){
        return $this->code;
    }
    
    public function setCode($value){
        $this->code = $value;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($value){
        $this->description = $value;
    }
    
    public function getType(){
        return $this->type;
    }
    
    public function setType($value){
        $this->type = $value;
    }
}
?>