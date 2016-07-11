<?php

class Module {
    private $name = "";
    private $id = 0;
    private $cp = 0;
    private $semester = 0;

    public static function fromArray($row) {
        $obj = new Module();
        $obj->setName($row["name"]);
        $obj->setId($row["id"]);
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

    public function getCp(){
      return $this->cp;
    }

    public function setCp($value) {
      $this->cp = $value;
    }

    public function completedModule($moduleId) {
      $userId = $_SESSION["currentUser"]->getId();

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
