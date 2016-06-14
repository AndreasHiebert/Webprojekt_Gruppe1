<?php

class Module {
    private $name = "";
    private $id = 0;
    private $abbrieviation = "";
    private $description = "";
    private $status = 0;
    private $cp = 0;

    public static function fromArray($row) {
        $obj = new Module();
        $obj->setName($row["name"]);
        $obj->setId($row["id"]);
        $obj->setAbbreviation($row["abbreviation"]);
        $obj->setDescription($row["description"]);
        $obj->setStatus($row["status"]);
        $obj->setCp($row["cp"]);
        return $obj;
    }

    public function getName(){
      return $this->name;
    }

    public function setName($value) {
      $this->name = $value;
    }

    public function getId(){
      return $this->id;
    }

    public function setId($value) {
      $this->id = $value;
    }

    public function getAbbreviation(){
      return $this->abbreviation;
    }

    public function setAbbreviation($value) {
      $this->abbreviation = $value;
    }

    public function getDescription(){
      return $this->description;
    }

    public function setDescription($value) {
      $this->description = $value;
    }

    public function getStatus(){
      return $this->status;
    }

    public function setStatus($value) {
      $this->status = $value;
    }

    public function getCp(){
      return $this->cp;
    }

    public function setCp($value) {
      $this->cp = $value;
    }

}
?>
