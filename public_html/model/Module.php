<?php

class Module {
    
    private $name;
    private $id;
    private $abbrieviation;
    private $description;
    private $status;
    private $cp;
    
    public function __construct($row){
        $this->name=$row['name'];
        $this->id=$row['id'];
        $this->abbrieviation=$row['abbreviation'];
        $this->description=$row['description'];
        $this->status=$row['status'];
        $this->cp=$row['cp'];
        
    }
    public function getname(){
        return $this->name;  
    }
   
    public function getid(){
        return $this->id;
    }
    
    public function getabreviation(){
        return $this->abbreviation;
    }
    
    public function getdescription(){
        return $this->description;
    }
    
    public function getstatus(){
        return $this->status;  
    }
   
    public function getcp(){
        return $this->cp;
    }
    
}
?>
