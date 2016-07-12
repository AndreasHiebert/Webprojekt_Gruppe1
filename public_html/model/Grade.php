<?php

class Grade {

    private $id = 0;
    private $user_id = 0;
    private $module_id = 0;
    private $grade = 0;
    private $date = "";


    public static function fromArray($row) {
        $obj = new Grade();
        $obj->setUserId($row["user_id"]);
        $obj->setModuleId($row["module_id"]);
        $obj->setGrade($row["grade"]);
        return $obj;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($value) {
        $this->user_id = $value;
    }

    public function getModuleId() {
        return $this->module_id;
    }

    public function setModuleId($value) {
        $this->module_id = $value;
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

    public function validate() {
        $error = new ValidationError();

        if (empty($this->getUserId())) {
            $error->addError("no_user_id");
        }
        if (empty($this->getModuleId())) {
            $error->addError("no_module_id");
        }
        if (empty($this->getGrade())) {
            $error->addError("no_grade");
        }
    }
}

?>
