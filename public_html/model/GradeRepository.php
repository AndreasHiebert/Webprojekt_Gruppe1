<?php

class GradeRepository {
    public function getAllGrades() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT *
                            FROM grades
                            ORDER BY id");

        foreach ($stmt as $row) {
            $result[] = Grade::fromArray($row);
        }

        return $result;
    }

    public function getCurrentCp(){
        global $db;
        global $currentUser;
        $result = 0;

        $stmt = $db->query("SELECT SUM(modules.cp)
                            FROM grades
                            inner JOIN modules
                            ON grades.module_id = modules.id
                            WHERE grades.user_id = $currentUser->getId();");

        foreach($stmt as $row){
            $result = $row["SUM(modules.cp)"];
        }

        return $result;
    }

    public static function saveGrades($grade) {
        global $db;

        $stmt = $db->prepare("INSERT INTO grades (userId, moduleId, grade ) "
                . "values (:userId, :moduleId, :grade)");
        $stmt->bindValue(':userId', $grade->getUserId(), PDO::PARAM_INT);
        $stmt->bindValue(':moduleId', $grade->getModuleId(), PDO::PARAM_INT);
        $stmt->bindValue(':grade', $grade->getGrade(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
