<?php

class InstructorRepository {
    public function getAllInstructors() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * from instructors order by id");
        foreach ($stmt as $row) {
            $result[] = Instructor::fromArray($row);
        }

        return $result;
    }

    public static function saveInstructor($instructor) {
        global $db;

        $stmt = $db->prepare("INSERT into instructors (name, email, password, approved) "
                . "values (:name, :email, :password, :approved");
        $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':password', $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(':approved', $user->getApproved(), PDO::PARAM_BIT);

        $stmt->execute();
    }
}
?>
