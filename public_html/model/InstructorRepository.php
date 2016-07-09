<?php

class InstructorRepository {
    public function getAllInstructors() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT *
                            FROM instructors
                            ORDER BY id");

        foreach ($stmt as $row) {
            $result[] = Instructor::fromArray($row);
        }

        return $result;
    }

    public static function saveInstructor($instructor) {
        global $db;

        if(isset($_REQUEST[update])) {
            $id = $_REQUEST['id'];
            $stmt = $db->prepare('UPDATE instructors SET approved=:approved WHERE id=:id');
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
