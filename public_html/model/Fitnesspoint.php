<?php

class Fitnesspoint{
    private $id = 0;
    private $user_id = 0;
    private $achievement_id = 0;



    public static function fromArray($row) {
      $obj = new Fitnesspoint();
      $obj->setId($row["id"]);
      $obj->setUserId($row["user_id"]);
      $obj->setAchievementId($row["achievement_id"]);
      return $obj;
    }
    
    public function getUserId(){
        return $this->user_id;
    }
    
    public function setUserId($value){
        $this->user_id = $value;
    }
    
    public function getAchievementId(){
        return $this->achievement_id;
    }

    public function setAchievementId($value){
        $this->achievement_id= $value;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($value){
        $this->id = $value;
    }
}
?>
