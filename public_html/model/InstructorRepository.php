<?php

class InstructorRepository {
    public function getAllInstructors() {
        global $db;
        $result = array();

        $stmt = $db->query('SELECT *
                            FROM instructors
                            ORDER BY id');

        foreach ($stmt as $row) {
            $result[] = Instructor::fromArray($row);
        }

        return $result;
    }

    public function setCorrectInstructor($username , $password){
      global $db;
      $result = array();

      $stmt =$db->query("SELECT *
                         FROM instructors
                         WHERE email='$username'
                         AND password ='$password'
                         LIMIT 1");

       foreach ($stmt as $row) {
          $result[] = Instructor::fromArray($row);
      }
      return $result[0];
  }


    public function testInstructorLogin($username , $password){
        global $db;
        $foundInstructor = FALSE;
        $result = array();

        $stmt =$db->query("SELECT *
                           FROM instructors
                           WHERE email='$username'
                           AND password ='$password'
                           LIMIT 1");

         foreach ($stmt as $row) {
            $result[] = User::fromArray($row);
            if($result != NULL){
              $foundInstructor = TRUE;
              break;
            }
        }
        return $foundInstructor;
    }

    public static function saveInstructor($instructor) {
        global $db;

        if(isset($_REQUEST[update])) {
            $id = $_REQUEST['id'];
            $stmt = $db->prepare('UPDATE instructors
                                  SET approved=:approved
                                  WHERE id=:id');
            $stmt->bindValue(':approved',1,PDO::PARAM_INT);
            $stmt->bindValue(':id',$id,PDO::PARAM_INT);
            $stmt->execute();

        } else {
            $stmt = $db->prepare('INSERT INTO instructors (name, email, password, approved) values (:name, :email, :password, :approved)' );

            $stmt->bindValue(':name', $instructor->getName(), PDO::PARAM_STR);
            $stmt->bindValue(':email', $instructor->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':password', $instructor->getPassword(), PDO::PARAM_STR);
            $stmt->bindValue(':approved', $instructor->getApproved(), PDO::PARAM_INT);
            $stmt->execute();
        }

    }
}
?>
