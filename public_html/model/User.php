<?php

class User {
    private $id = 0;
    private $name = "";
    private $password = "";
    private $regDate = "";
    private $email = "";
    private $activeCourse = 0;
    private $fitnesspoints = 0;

    public static function fromArray($row) {
      $obj = new User();
      $obj->setId($row["id"]);
      $obj->setName($row["name"]);
      $obj->setPassword($row["password"]);
      $obj->setRegDate($row["regDate"]);
      $obj->setEmail($row["email"]);
      $obj->setActiveCourse($row["activeCourse"]);
      $obj->setFitnesspoints($row["fitnesspoints"]);
      return $obj;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }

    public function getRegDate() {
        return $this->regDate;
    }

    public function setRegDate($value) {
        $this->regDate = $value;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($value) {
        $this->email = $value;
    }

    public function getActiveCourse() {
        return $this->activeCourse;
    }

    public function setActiveCourse($value) {
        $this->activeCourse = $value;
    }

    public function getFitnesspoints() {
        return $this->fitnesspoints;
    }

    public function setFitnesspoints($value) {
        $this->fitnesspoints = $value;
    }

    public function getCourseAbbreviation(){
        $repo = new UserRepository();
        return $repo->getCurrentUserCourseAbbreviation();
    }

    public function validate() {
        $error = new ValidationError(); // create ValidationError class

        if (empty($this->getEmail())) {
            $error->addError("email_empty");
        }

        if (empty($this->getName())) {
            $error->addError("name_empty");
        }

        if (empty($this->getPassword())) {
            $error->addError("password_empty");
        }

        return $error;
    }

}
?>
