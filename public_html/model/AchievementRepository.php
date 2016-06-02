<?php

class AchievementRepository{
 public function getAllAchievements() {
        global $db;
        $result = array();
        
        $stmt = $db->query("select * from achievements order by id");
        foreach ($stmt as $row) {
            $result[] = new Achievement($row);
        }
        
        return $result;
    }   
}
?>
