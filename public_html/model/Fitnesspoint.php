<?php

class Fitnesspoint{
    private $id = 0;
    private $value = 0;

    public static function fromArray($row) {
      $obj = new Fitnesspoint();
      $obj->setId($row["id"]);
      $obj->setValue($row["value"]);
      return $obj;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($value){
        $this->id = $value;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
       $this->value = $value;
    }

}
?>
