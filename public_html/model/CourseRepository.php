<?php

class CourseRepository{
    public function getAllCourses() {
        global $db;
        $result = array();

        $stmt = $db->query('SELECT *
                            FROM Courses
                            ORDER BY id');

        foreach ($stmt as $row) {
            $result[] = Course::fromArray($row);
        }

        return $result;
    }

    public function getCurrentCourseAbbreviation(){
        global $db;

        $course = $_SESSION["currentUser"]->getActiveCourse();

        $result = array();
        $stmt = $db->query("SELECT abbreviation
                            FROM courses
                            WHERE id = $course");

        foreach ($stmt as $row){
            $result[] = $row["abbreviation"];
        }

        return $result[0];
    }

    public function getCourseIdFromAbbreviation($abbr){
        global $db;

        $result = array();
        $stmt = $db->query("SELECT id
                            FROM courses");

        foreach ($stmt as $row){
            $result[] = $row["id"];
        }

        return $result[0];
    }

    public static function saveCourses($course) {
        global $db;

        $stmt = $db->prepare('INSERT INTO courses (name, abbreviation) '
                . 'values (:name, :abbreviation)');
        $stmt->bindValue(':name', $course->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':abbreviation', $course->getAbbreviation(), PDO::PARAM_STR);
        $stmt->execute();
    }
}
