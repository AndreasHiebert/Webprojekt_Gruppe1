<?php

class Instructor {
    private $id = 0;
    private $name = "";
    private $email = "";
   private $password = "";
    private $approved = 0;

    public static function fromArray($row) {
      $obj = new Instructor();
      $obj->setId($row["id"]);
      $obj->setName($row["name"]);
      $obj->setEmail($row["email"]);
      $obj->setPassword($row["password"]);
      $obj->setApproved($row["approved"]);
      return $obj;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
      $this->id = $value;
    }

    public function getName() {
        return $this->username;
    }

    public function setName($value) {
        $this->username = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($value) {
        $this->email = $value;
    }

    public function getApproved() {
        return $this->approved;
    }

    public function setApproved($value) {
        $this->approved = $value;
    }

    public function validate() {
        $error = new ValidationError();

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
