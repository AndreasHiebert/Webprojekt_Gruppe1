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

    public static function saveUser($topic) {
        global $db;

        $stmt = $db->prepare("INSERT into users (name, password, email, activeCourse) "
                . "values (:name, :password, :email, :activeCourse)");
        $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':password', $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':activeCourse', $user->getActiveCourse(), PDO::PARAM_INT);
        
        $stmt->execute();
    }
}
?>
