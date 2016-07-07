<?php

class ModuleRepository {
   public function getAllModules() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT *
                            FROM modules
                            ORDER BY semester
                            ASC");

        foreach ($stmt as $row) {
            $result[] = Module::fromArray($row);
        }

        return $result;
    }

    public function getHighestSemester(){
        global $db;
        global $currentUser;

        $course = $currentUser->getActiveCourse();

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
        global $currentUser;
        $result = 0;

        $course = $currentUser->getActiveCourse();

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

        $stmt = $db->prepare("INSERT INTO modules (name, abbrieviation, description, status, cp, semester) "
                . "values (:name, :abbrieviation, :description, :status, :cp, :semester)");
        $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':abbrieviation', $user->getAbbrieviation(), PDO::PARAM_STR);
        $stmt->bindValue(':description', $user->getDescription(), PDO::PARAM_STR);
        $stmt->bindValue(':status', $user->getStatus(), PDO::PARAM_INT);
        $stmt->bindValue(':cp', $user->getCp(), PDO::PARAM_INT);
        $stmt->bindValue(':semester', $user->getSemester(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
