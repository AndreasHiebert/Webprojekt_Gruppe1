<?php

class FitnesspointRepository{
    public function getAllFitnesspoints() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT *
                            FROM fitnesspoints
                            ORDER BY id");
        foreach ($stmt as $row) {
            $result[] = Fitnesspoint::fromArray($row);
        }

        return $result;
    }

    public function getFitnesspoints($user){
        global $db;

        $id = $user->getId();
        $stmt = $db->query("SELECT SUM(a.value)
                            FROM users u
                            INNER JOIN fitnesspoints f
                            ON u.id = f.user_id
                            INNER JOIN achievements a
                            ON a.id = f.achievement_id
                            WHERE u.id = $id
                            GROUP BY u.id");

        foreach ($stmt as $row){
            $result[] = $row["SUM(a.value)"];
        }
       return $result[0];
    }
    
    public function getEveryUserFitnesspoint(){
        global $db;
        global $currentUser;
        
        $result = array();
        
        $course = $currentUser->getActiveCourse();
        
        $stmt = $db->query("SELECT SUM(achievements.value) FROM fitnesspoints INNER JOIN achievements ON fitnesspoints.achievement_id = achievements.id inner JOIN users ON users.id = fitnesspoints.user_id WHERE users.activeCourse = $course GROUP BY fitnesspoints.user_id");
        
        foreach ($stmt as $row){
            $result[] = $row["SUM(achievements.value)"];
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
