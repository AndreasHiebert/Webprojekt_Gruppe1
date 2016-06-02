<?php

class CourseRepository{
 public function getAllCourses() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * from Courses order by id");
        foreach ($stmt as $row) {
            $result[] = new Course($row);
        }

        return $result;
    }
}
