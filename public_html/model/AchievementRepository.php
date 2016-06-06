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

    public static function saveAchievements($achievement) {
        global $db;

        $stmt = $db->prepare("INSERT into achievements (name, code, description, type) "
                . "values (:name, :code, :description, :type)");
        $stmt->bindValue(':name', $achievement->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':code', $achievement->getCode(), PDO::PARAM_STR);
        $stmt->bindValue(':description', $achievement->getDescription(), PDO::PARAM_STR);
        $stmt->bindValue(':type', $achievement->getType(), PDO::PARAM_INT);
        $stmt->execute();
    }
}
?>
