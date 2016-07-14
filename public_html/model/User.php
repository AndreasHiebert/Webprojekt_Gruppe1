<?php

class User {
    private $id = 0;
    private $name = "";
    private $password = "";
    private $regDate = "";
    private $email = "";
    private $activeCourse = 0;

    public static function fromArray($row) {
      $obj = new User();
      $obj->setId($row["id"]);
      $obj->setName($row["name"]);
      $obj->setPassword($row["password"]);
      $obj->setRegDate($row["regDate"]);
      $obj->setEmail($row["email"]);
      $obj->setActiveCourse($row["activeCourse"]);
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
    
    public function getAVGFitnesspoints(){
        $repo = new FitnesspointRepository();
        $fitnesspoints = $repo->getEveryUserFitnesspoint();
        $amount = 0;
        $allfitnesspoints= 0;
        
        foreach ($fitnesspoints as $fitnesspoint){
            $amount++;
            $allfitnesspoints = $allfitnesspoints + $fitnesspoint;
        }
        
        if($amount == 0){
            return $allfitnesspoints;
        }
        else{
            return $allfitnesspoints/$amount;
        }
        
        
    }

    public function getFitnesspoints($user){
        $repo = new FitnesspointRepository();
        return $repo->getFitnesspoints($user);
    }

    public function getCurrentCourseAbbreviation(){
        $repo = new CourseRepository();
        return $repo->getCurrentCourseAbbreviation();
    }

    public function getCurrentRanking(){
        $repo = new UserRepository();
        return $repo->getCurrentRanking();
    }

    public function getRecentAchievements(){
        $repo = new AchievementRepository();
        return $repo->getRecentAchievements();
    }

    public function getActiveCourseMaxCp(){
        $repo = new ModuleRepository();
        return $repo->getActiveCourseMaxCp();
    }

    public function getCurrentCp(){
        $repo = new GradeRepository();
        return $repo->getCurrentCp();
    }

    public function getCurrentCPPercent(){
        $grade = new GradeRepository();
        $currentCP = $grade->getCurrentCp();

        $repo = new ModuleRepository();
        $maxCP = $repo->getActiveCourseMaxCp();


         $percent = ($currentCP/ $maxCP)* 100;
         return number_format($percent, 2);
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
