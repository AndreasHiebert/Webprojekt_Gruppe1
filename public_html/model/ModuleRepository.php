<?php

class ModuleRepository {
   public function getAllModules() {
        global $db;
        $result = array();

        $stmt = $db->query('SELECT *
                            FROM modules
                            ORDER BY id');

        foreach ($stmt as $row) {
            $result[] = Module::fromArray($row);
        }

        return $result;
    }

    public function getHighestSemester(){
        global $db;

        $course = $_SESSION["currentUser"]->getActiveCourse();

        $result = array();
        $stmt = $db->query("SELECT semester
                            FROM modules
                            WHERE course_id = $course
                            ORDER by semester
                            ASC
                            LIMIT 0,1");

        foreach ($stmt as $row){
            $result[] = $row["semester"];
        }

        return $result[0];
    }


    public function getActiveCourseMaxCp(){
        global $db;
        $result = 0;

        $course = $_SESSION["currentUser"]->getActiveCourse();

        $stmt = $db->query("SELECT SUM(cp)
                            FROM modules
                            WHERE course_id = $course");

        foreach($stmt as $row){
            $result = $row["SUM(cp)"];
        }

        return $result;
    }

    public static function saveModule($modul) {
        global $db;

        $stmt = $db->prepare('INSERT INTO modules (name, status, cp, semester) '
                . 'values (:name, :abbrieviation, :status, :cp, :semester)');
        $stmt->bindValue(':name', $modul->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':status', $modul->getStatus(), PDO::PARAM_INT);
        $stmt->bindValue(':cp', $modul->getCp(), PDO::PARAM_INT);
        $stmt->bindValue(':semester', $modul->getSemester(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
