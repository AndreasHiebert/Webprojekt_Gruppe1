<?php

class Course{
    private $id = 0;
    private $name = "";
    private $abbreviation="";

    public static function fromArray($row) {
      $obj = new Course();
      $obj->setId($row["id"]);
      $obj->setName($row["name"]);
      $obj->setAbbreviation($row["abbreviation"]);
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
}
