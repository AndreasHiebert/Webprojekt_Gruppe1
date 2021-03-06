<?php

class GradeRepository {
    public function getAllGrades() {
        global $db;
        $result = array();

        $stmt = $db->query('SELECT *
                            FROM grades
                            ORDER BY id');

        foreach($stmt as $row) {
            $result[] = Grade::fromArray($row);
        }

        return $result;
    }

    public function getCurrentCp(){
        global $db;
        $result = 0;

        $UserID = $_SESSION["currentUser"]->getId();

        $stmt = $db->query("SELECT SUM(modules.cp)
                            FROM grades
                            inner JOIN modules
                            ON grades.module_id = modules.id
                            WHERE grades.user_id = $UserID
                            AND grades.grade <= 4");

        foreach($stmt as $row){
            $result = $row["SUM(modules.cp)"];
        }

        if($result == NULL){
          return 0;
        } else {
          return $result;
        }
    }

    public function getUserGrades(){
        global $db;

        $result = array();

        $UserID = $_SESSION["currentUser"]->getId();

        $stmt = $db->query("SELECT *
                            FROM grades
                            WHERE user_id = $UserID
                            AND grade <= 4");

        foreach($stmt as $row) {
            $result[] = Grade::fromArray($row);
        }

        return $result;
    }

    public function gradeAlreadyPassed($moduleID){
        global $db;

        $result = array();
        $bool = false;

        $UserID = $_SESSION["currentUser"]->getId();

        $stmt = $db->query("SELECT *
                            FROM grades
                            WHERE user_id = $UserID
                            AND grade <= 4
                            AND module_id = $moduleID");

        foreach($stmt as $row) {
            $result[] = Grade::fromArray($row);
            $bool = true;
        }
        return $bool;
    }

    public static function saveGrade($grade) {
        global $db;

        $stmt = $db->prepare('INSERT INTO grades (user_id, module_id, grade)'
                . 'values (:userId, :moduleId, :grade)');
        $stmt->bindValue(':userId', $grade->getUserId(), PDO::PARAM_INT);
        $stmt->bindValue(':moduleId', $grade->getModuleId(), PDO::PARAM_INT);
        $stmt->bindValue(':grade', $grade->getGrade(), PDO::PARAM_INT);

        $stmt->execute();
    }

    public static function updateGrade($grade) {
        global $db;

        $stmt = $db->prepare('UPDATE grades
                              SET grade = :gradeIn
                              WHERE user_id = :userId
                              AND module_id = :moduleId');
        $stmt->bindValue(':userId', $grade->getUserId(), PDO::PARAM_INT);
        $stmt->bindValue(':moduleId', $grade->getModuleId(), PDO::PARAM_INT);
        $stmt->bindValue(':gradeIn', $grade->getGrade(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
