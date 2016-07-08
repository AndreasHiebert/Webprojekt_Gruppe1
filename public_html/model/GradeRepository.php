<?php

class GradeRepository {
    public function getAllGrades() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * FROM grades ORDER BY id");

        foreach($stmt as $row) {
            $result[] = Grade::fromArray($row);
        }

        return $result;
    }

    public function getCurrentCp(){
        global $db;
        global $currentUser;
        $result = 0;
        
        $UserID = $currentUser->getId();

        $stmt = $db->query("SELECT SUM(modules.cp)
                            FROM grades
                            inner JOIN modules
                            ON grades.module_id = modules.id
                            WHERE grades.user_id = $UserID and grades.grade <= 4");

        foreach($stmt as $row){
            $result = $row["SUM(modules.cp)"];
        }

        return $result;
    }
    
    public function getUserGrades(){
        global $db;
        global $currentUser;
        
        $result = array();
        
        $UserID = $currentUser->getId();
        
        $stmt = $db->query("SELECT * FROM grades WHERE user_id = $UserID and grade <= 4");

        foreach($stmt as $row) {
            $result[] = Grade::fromArray($row);
        }

        return $result;
    }

    public static function saveGrades($grade) {
        global $db;

        $stmt = $db->prepare("INSERT INTO grades (user_id, module_id, grade)"
                . "values (:userId, :moduleId, :grade)");
        $stmt->bindValue(':userId', $grade->getUserId(), PDO::PARAM_INT);
        $stmt->bindValue(':moduleId', $grade->getModuleId(), PDO::PARAM_INT);
        $stmt->bindValue(':grade', $grade->getGrade(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
