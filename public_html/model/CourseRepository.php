<?php

class CourseRepository{
    public function getAllCourses() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * FROM Courses ORDER BY id");
        foreach ($stmt as $row) {
            $result[] = Course::fromArray($row);
        }

        return $result;
    }

    public static function saveCourses($course) {
        global $db;

        $stmt = $db->prepare("INSERT INTO courses (name, abbreviation, module, moduleList, countParicipants, maxCp, moduleNumber, description) "
                . "values (:name, :abbreviation, :module, :moduleList, :countParticipants, :maxCp, :moduleNumber, :description)");
        $stmt->bindValue(':name', $course->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':abbrieviation', $course->getAbbrieviation(), PDO::PARAM_STR);
        $stmt->bindValue(':module', $course->getModule(), PDO::PARAM_INT);
        $stmt->bindValue(':moduleList', $course->getModuleList(), PDO::PARAM_INT);
        $stmt->bindValue(':countParticipants', $course->getCountParticipants(), PDO::PARAM_INT);
        $stmt->bindValue(':maxCp', $course->getMaxCp(), PDO::PARAM_INT);
        $stmt->bindValue(':moduleNumber', $course->getModuleNumber(), PDO::PARAM_INT);
        $stmt->bindValue(':description', $course->getDescription(), PDO::PARAM_STR);
        $stmt->execute();
    }
}
