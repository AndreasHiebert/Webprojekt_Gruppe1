<?php

class Course{

    private $name = "";
    private $abbreviation="";
    private $id = 0;
    private $description="";
    private $module = 0;
    private $moduleList = 0;
    private $participants = 0;
    private $maxCp = 0;
    private $numberModule = 0;
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($value){
        $this->name = $value;
    }

        public function getAbbreviation(){
        return $this->abbreviation;
    }
    
    public function setAbbreviation($value){
        $this->abbreviation = $value;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($value){
        $this->id = $value;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($value){
        $this->description = $value;
    }
     
    public function getModule(){
        return $this->module;
    }
    
    public function setModule($value){
        $this->module = $value;
    }
    
    public function getModuleList(){
        return $this->moduleList;
    }
    
    public function setModuleList($value){
        $this->moduleList = $value;
    }
    
    public function getParticipants(){
        return $this->participants;
    }
    
    public function setParticipants($value){
        $this->participants = $value;
    }
    
    public function getMaxCp(){
        return $this->maxCp;
    }
    
    public function setMaxCp($value){
        $this->maxCp = $value;
    }
    
    public function getNumberModule(){
        return $this->numberModule;
    }
    
    public function setNumberModule($value){
        $this->numberModule = $value;
    }
}