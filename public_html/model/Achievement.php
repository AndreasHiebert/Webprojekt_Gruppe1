<?php

class Achievement{
    private $id=0;
    private $name="";
    private $code="";
    private $description = "";
    private $obtainedDate = "";
    private $value = 0;


    public static function fromArray($row) {
      $obj = new Achievement();
      $obj->setId($row["id"]);
      $obj->setName($row["name"]);
      $obj->setCode($row["code"]);
      $obj->setDescription($row["description"]);
      $obj->setValue($row["value"]);
      $obj->setObtainedDate($row["obtainedDate"]);
      return $obj;
    }

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

    public function getObtainedDate(){
        return $this->obtainedDate;
    }

    public function setObtainedDate($value){
        $this->obtainedDate = $value;
    }

    public function setDescription($value){
        $this->description = $value;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
        $this->value = $value;
    }
    
}
?>
