<?php

class FitnesspointRepository{
    public function getAllFitnesspoints() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * FROM fitnesspoints ORDER BY id");
        foreach ($stmt as $row) {
            $result[] = Fitnesspoint::fromArray($row);
        }

        return $result;
    }

    public static function saveFitnesspoint($fitnesspoint) {
        global $db;

        $stmt = $db->prepare("INSERT INTO fitnesspoints (user_id, achievement_id)"
                . "values (:user_id, :achievement_id)");
        $stmt->bindValue(':user_id', $fitnesspoint->getUserId(), PDO::PARAM_INT);
        $stmt->bindValue(':achievement_id', $fitnesspoint->getAchievementId(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
