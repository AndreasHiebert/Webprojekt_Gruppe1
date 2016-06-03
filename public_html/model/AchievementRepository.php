<?php

class AchievementRepository{
    public function getAllAchievements() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * from achievements order by id");
        foreach ($stmt as $row) {
            $result[] = Achievement::fromArray($row);
        }

        return $result;
    }
}
?>
