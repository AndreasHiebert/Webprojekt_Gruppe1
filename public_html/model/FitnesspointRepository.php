<?php

class FitnesspointRepository{
    public function getAllFitnesspoints() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * from fitnesspoints order by id");
        foreach ($stmt as $row) {
            $result[] = Fitnesspoint::fromArray($row);
        }

        return $result;
    }

    public static function saveFitnesspoint($fitnesspoint) {
        global $db;

        $stmt = $db->prepare("INSERT into fitnesspoints (value) "
                . "values (:value");
        $stmt->bindValue(':value', $user->getValue(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
