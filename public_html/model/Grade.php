<?php

class Grade {
    private $id = 0;
    private $userId = 0;
    private $moduleId = 0;
    private $grade = 0;
    private $date = "";


    public static function fromArray($row) {
        $obj = new Grade();
        $obj->setId($row["id"]);
        $obj->setUserId($row["userId"]);
        $obj->setModuleId($row["moduleId"]);
        $obj->setGrade($row["grade"]);
        $obj->setDate($row["date"]);
        return $obj;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($value) {
        $this->userId = $value;
    }

    public function getModuleId() {
        return $this->moduleId;
    }

    public function setModuleId($value) {
        $this->moduleId = $value;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function setGrade($value) {
        $this->grade = $value;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($value) {
        $this->date = $value;
    }

}
?>
