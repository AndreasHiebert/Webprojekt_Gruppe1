<?php

class Module {
    private $name = "";
    private $id = 0;
    private $abbrieviation = "";
    private $description = "";
    private $status = 0;
    private $cp = 0;
    private  $semester = 0;

    public static function fromArray($row) {
        $obj = new Module();
        $obj->setName($row["name"]);
        $obj->setId($row["id"]);
        $obj->setAbbreviation($row["abbreviation"]);
        $obj->setDescription($row["description"]);
        $obj->setStatus($row["status"]);
        $obj->setCp($row["cp"]);
        $obj->setSemester($row["semester"]);
        return $obj;
    }
    
    public function getSemester(){
        return $this->semester;
    }
    
    public function setSemester($value){
        $this->semester = $value;
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
    
    public function completedModule($moduleId) {
        
      global $currentUser;
      $userId = $currentUser->getId();
      
      $result = false;
      
      $repo= new GradeRepository();
        $gradeObjects=$repo->getUserGrades();
        
      foreach($gradeObjects as $grade){
        if($grade->getGrade() <= 4 && $grade->getModuleId() == $moduleId)
        {
            $result = true;
        }
    }
    return $result;
    }
    
    public function completedModuleGrade($moduleId) {
        
      $repo= new GradeRepository();
        $gradeObjects=$repo->getUserGrades();
        
      foreach($gradeObjects as $grade){
        if($grade->getGrade() <= 4 && $grade->getModuleId() == $moduleId)
        {
            $result = $grade->getGrade();
        }
    }
    return $result;
    }
}
?>
