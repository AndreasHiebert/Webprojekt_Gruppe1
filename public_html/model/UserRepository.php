<?php

class UserRepository {
    public function getAllUsers() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * from users order by id");
        foreach ($stmt as $row) {
            $result[] = User::fromArray($row);
        }

        return $result;
    }
    
    public function getUserPosition(){
        global $db;
        $result = array();
        $stmt = $db->query("SELECT * FROM users WHERE activeCourse = "+$currentUser->getCurrentCourse+" ORDER BY fitnesspoints DESC");
        foreach ($stmt as $row){
            $result[] = User::fromArray($row);
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
