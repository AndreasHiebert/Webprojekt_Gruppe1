<?php

class AchievementRepository{
    public function getAllAchievements() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * FROM achievements ORDER BY id");
        foreach ($stmt as $row) {
            $result[] = Achievement::fromArray($row);
        }

        return $result;
    }

    public static function saveAchievements($achievement) {
        global $db;

        $stmt = $db->prepare("INSERT INTO achievements (name, code, description, type, obtainedDate, value) "
                . "values (:name, :code, :description, :type, :obtainedDate, :value)");
        $stmt->bindValue(':name', $achievement->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':code', $achievement->getCode(), PDO::PARAM_STR);
        $stmt->bindValue(':obtainedDate', $achievement->getObtainedDate(), PDO::PARAM_STR);
        $stmt->bindValue(':value', $achievement->getValue(), PDO::PARAM_INT);
        $stmt->execute();
    }
}
?>
