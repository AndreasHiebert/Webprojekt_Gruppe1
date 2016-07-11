<?php

class Achievement{
    private $id=0;
    private $name="";
    private $code="";
    private $createdDate = "";
    private $value = 0;


    public static function fromArray($row) {
      $obj = new Achievement();
      $obj->setId($row["id"]);
      $obj->setName($row["name"]);
      $obj->setCode($row["code"]);
      $obj->setValue($row["value"]);
      $obj->setCreatedDate($row["createdDate"]);
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

    public function getCreatedDate(){
        return $this->createdDate;
    }

    public function getCreatedDateDDMMYY(){
      $source = $this->createdDate;
      $date = new DateTime($source);
      return $date->format('d.m.Y');;
    }

    public function setCreatedDate($value){
        $this->createdDate = $value;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
        $this->value = $value;
    }

}
?>
