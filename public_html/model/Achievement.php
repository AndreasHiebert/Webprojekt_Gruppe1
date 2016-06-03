<?php

class Achievement{
    private $id=0;
    private $name="";
    private $code="";
    private $description="";
    private $type=0;

    public static function fromArray($row) {
      $obj = new Achievement();
      $obj->setId($row["id"]);
      $obj->setName($row["name"]);
      $obj->setCode($row["code"]);
      $obj->setDescription($row["description"]);
      $obj->setType($row["type"]);
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
