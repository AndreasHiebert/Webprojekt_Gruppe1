<?php

class UserRepository {
    public function getAllUsers() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * FROM users ORDER BY id");
        foreach ($stmt as $row) {
            $result[] = User::fromArray($row);
        }

        return $result;
    }

    public function getHighestSemester(){
        global $db;
        global $smarty;

        //$course = $currentUser->getActiveCourse();
        $course = 1;

        $result = array();
        $stmt = $db->query("SELECT semester FROM modules WHERE course_id = $course ORDER by semester ASC LIMIT 0,1");

        foreach ($stmt as $row){
            $result[] = $row["semester"];
        }

        return $result[0];
    }

    public function getCurrentUserCourseAbbreviation(){
        global $db;
        global $smarty;

        //$course = $currentUser->getActiveCourse();
        $course = 1;

        $result = array();
        $stmt = $db->query("SELECT abbreviation FROM courses WHERE id = $course");

        foreach ($stmt as $row){
            $result[] = $row["abbreviation"];
        }

        return $result[0];
    }

    public function getUserPosition(User $user){
        global $db;

        $result = array();
        $course = $user->getActiveCourse();

        $stmt = $db->query("SELECT u.id, SUM(a.value) FROM users u INNER JOIN fitnesspoints f ON u.id = f.user_id INNER JOIN achievements a ON a.id = f.achievement_id WHERE u.activeCourse = $course GROUP BY u.id ORDER BY SUM(a.value) DESC");
        foreach ($stmt as $row){
            $result[] = $row["id"];
        }

        $userId = $user->getId();
        $key = array_search($userId, $result);

        return $key + 1;
    }

    public function  getUserFitnessPoints(User $user){
        global $db;

        $UserID = $user->getId();

        $stmt = $db->query("SELECT SUM(a.value) FROM users u INNER JOIN fitnesspoints f ON u.id = f.user_id INNER JOIN achievements a ON a.id = f.achievement_id WHERE u.id = $UserID GROUP BY u.id");

        foreach ($stmt as $row){
            $result[] = $row["SUM(a.value)"];
        }
       return $result[0];
    }

    public function getRecentAchievement(){
        global $db;
        global $smarty;
        
        $result = array();

        $UserID = intval($_GET['$currentUser->getId']);
        $stmt = $db->query("SELECT name, value FROM fitnesspoints f INNER JOIN achievements a ON a.id = f.achievement_id WHERE f.user_id = 1 ORDER BY f.id DESC");

        $zaehler = 0;

         foreach ($stmt as $row) {

             if($zaehler === 5){
                 break;
             }

             $obj = new Achievement();
             $obj->setName($row["name"]);
             $obj->setValue($row["value"]);

             $result[] = $obj;

             $zaehler++;
        }
        return $result;
    }
    
    public function getCpReached(User $user){
        
        global $db;
        $result = 0;
        
        $UserID = $user->getId();
        
        $stmt = $db->query("SELECT SUM(modules.cp) FROM grades inner JOIN modules ON grades.module_id = modules.id WHERE grades.user_id = $UserID");
    
        foreach($stmt as $row){
            $result = $row["SUM(modules.cp)"];
        }
     
        return $result;
    }
    
    public function getCpAll(User $user){
        global $db;
        $result = 0;
        
        $UserID = $user->getId();
        
        $stmt = $db->query("SELECT SUM(cp) FROM modules WHERE course_id = 1");
    
        foreach($stmt as $row){
            $result = $row["SUM(cp)"];
        }
     
        return $result;
    
    }

    public static function saveUser($user) {
        global $db;

        $stmt = $db->prepare("INSERT into users (name, password, regdate, email, activeCourse, fitnesspoints) "
                . "values (:name, :password, :email, :activeCourse, :fitnesspoints)");
        $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':password', $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(':regDate', $user->getRegDate(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':activeCourse', $user->getActiveCourse(), PDO::PARAM_INT);
        $stmt->bindValue(':fitnesspoints', $user->getFitnesspoints(), PDO::PARAM_INT);

        $stmt->execute();
    }

/*
    public function login($email,$password){
      try
      {
         $stmt = $db->prepare("SELECT * FROM users WHERE email=:email OR password=:password LIMIT 1");
         $stmt->execute(array(':email'=>$email, ':password'=>$password));
         $currentUser=$stmt->fetch(PDO::FETCH_ASSOC);

         if($stmt->rowCount() > 0)
         {
            if($_currentUser->validate($password, $currentUser['password']))
            {
            //   $_SESSION['user_session'] = $currentUser['id'];
            //   return true;
            }
            else
            {
          //     return false;
            }
         } else {
           // check instructor´s here
         }
      }
      catch(PDOException $error)
      {
        //  echo $error->getMessage();
      }
      // test, if user was found go to homepage


      //global $smarty;
      //$smarty->display("../view/Homepage.html");
  }
  */
}
?>
