<?php

class User {
    private $id = 0;
    private $username = "name";
    private $password = "password";
    private $regdate = "";
    private $email = "";
    private $type = "student";

    public function __construct($row) {
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->password = $row['password'];
        $this->regdate = $row['regdate'];
        $this->email = $row['email'];
        $this->type = $row['type'];
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRegdate() {
        return $this->regdate;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getType() {
        return $this->type;
    }
}
