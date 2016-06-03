<?php

class Grade {
    private $id = 0;
    private $grade = 0;
    private $date = "";

    public static function fromArray($row) {
        $obj = new Grade();
        $obj->setId($row["id"]);
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
