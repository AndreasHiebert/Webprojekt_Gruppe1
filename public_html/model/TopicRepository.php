<?php

class TopicRepository {
    public function getAllTopics() {
        global $db;
        $result = array();
        
        $stmt = $db->query("select * from topics order by id");
        foreach ($stmt as $row) {
            $result[] = new Topic($row);
        }
        
        return $result;
    }
}