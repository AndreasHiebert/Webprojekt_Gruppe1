<?php

class Topic {
    private $id = 0;
    private $name = "Bla";
    private $description = "";
    private $status = 0;
    
    public function __construct($row) {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->description = $row['description'];
        $this->status = $row['status'];
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function getStatus() {
        return $this->status;
    }
}
