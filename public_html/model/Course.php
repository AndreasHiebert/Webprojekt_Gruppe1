<?php

class Course{
    private $id = 0;
    private $name = "";
    private $abbreviation="";
    private $module = 0;
    private $moduleList = 0;
    private $countParticipants = 0;
    private $maxCp = 0;
    private $moduleNumber = 0;
    private $description="";

    public static function fromArray($row) {
      $obj = new Course();
      $obj->setId($row["id"]);
      $obj->setName($row["name"]);
      $obj->setAbbreviation($row["abbreviation"]);
      $obj->setModule($row["module"]);
      $obj->setModuleList($row["moduleList"]);
      $obj->setCountParticipants($row["countParticipants"]);
      $obj->setMaxCp($row["maxCp"]);
      $obj->setModuleNumber($row["moduleNumber"]);
      $obj->setDescription($row["description"]);
      return $obj;
    }

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

    public function getCountParticipants(){
        return $this->participants;
    }

    public function setCountParticipants($value){
        $this->countParticipants = $value;
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
