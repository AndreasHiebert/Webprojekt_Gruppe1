<?php

class AchievementRepository{
    public function getAllAchievements() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * FROM achievements ORDER BY id DESC");

        foreach ($stmt as $row) {
            $result[] = Achievement::fromArray($row);
        }

        return $result;
    }

    public function getRecentAchievements(){
        global $db;
        global $currentUser;
        $result = array();

        $id = $currentUser->getId();
        $stmt = $db->query("SELECT name, value
                            FROM fitnesspoints f
                            INNER JOIN achievements a
                            ON a.id = f.achievement_id
                            WHERE f.user_id = $id
                            ORDER BY f.id
                            DESC");

        $zaehler = 0;

         foreach ($stmt as $row) {

             if($zaehler === 5){
                 break;
             }

             $obj = new Achievement();
             $obj->setName($row["name"]);
             $obj->setValue($row["value"]);

             $result[] = $obj;

             $zaehler++;
        }
        return $result;
    }

    public function getCurrentUserAchievements(){
        global $db;
        global $currentUser;
        $result = array();

        $id = $currentUser->getId();
        $stmt = $db->query("SELECT *
                            FROM achievements
                            INNER JOIN fitnesspoints
                            ON achievements.id = fitnesspoints.achievement_id
                            WHERE fitnesspoints.user_id = $id
                            ORDER BY fitnesspoints.id
                            DESC");


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
        $stmt->bindValue(':description', $achievemen->getDescription(), PDO::PARAM_STR);
        $stmt->bindValue(':obtainedDate', $achievement->getObtainedDate(), PDO::PARAM_STR);
        $stmt->bindValue(':value', $achievement->getValue(), PDO::PARAM_INT);
        $stmt->execute();
    }
}
?>
