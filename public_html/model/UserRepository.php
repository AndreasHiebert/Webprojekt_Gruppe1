<?php

class UserRepository {
    public function getAllUsers() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT *
                            FROM users
                            ORDER BY id");

        foreach ($stmt as $row) {
            $result[] = User::fromArray($row);
        }

        return $result;
    }

    public function testUserLogin($username , $password){
        global $db;
        $foundUser = FALSE;
        $result = array();

        $stmt =$db->query("SELECT *
                           FROM users
                           WHERE email='$username'
                           AND password ='$password'
                           LIMIT 1");

         foreach ($stmt as $row) {
            $result[] = User::fromArray($row);
            if($result != NULL){
              $foundUser = TRUE;
              break;
            }
        }
        return $foundUser;
    }

      public function setCorrectUser($username , $password){
        global $db;
        $result = array();

        $stmt =$db->query("SELECT *
                           FROM users
                           WHERE email='$username'
                           AND password ='$password'
                           LIMIT 1");

         foreach ($stmt as $row) {
            $result[] = User::fromArray($row);
        }
        return $result[0];
    }

    public function getCurrentRanking(){
        global $db;

        $result = array();
        $course = $_SESSION["currentUser"]->getActiveCourse();

        $stmt = $db->query("SELECT u.id, SUM(a.value)
                            FROM users u
                            INNER JOIN fitnesspoints f
                            ON u.id = f.id
                            INNER JOIN achievements a
                            ON a.id = f.achievement_id
                            WHERE u.activeCourse = $course
                            GROUP BY u.id
                            ORDER BY SUM(a.value)
                            DESC");

        foreach ($stmt as $row){
            $result[] = $row["id"];
        }

        $key = array_search($_SESSION["currentUser"]->getId(), $result);

        return $key + 1;
    }

    public static function saveUser($user) {
        global $db;

        $stmt = $db->prepare('INSERT INTO users (name, password, regdate, email, activeCourse) '
                . 'values (:name, :password, :email, :activeCourse)');
        $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':password', $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(':regDate', $user->getRegDate(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':activeCourse', $user->getActiveCourse(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
