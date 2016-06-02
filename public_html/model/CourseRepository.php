<?php

class CourseRepository{
 public function getAllTopics() {
        global $db;
        $result = array();
        
        $stmt = $db->query("select * from Courses order by id");
        foreach ($stmt as $row) {
            $result[] = new Course($row);
        }
        
        return $result;
    }   
}