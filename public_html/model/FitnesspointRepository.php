<?php

class FitnesspointRepository{
 public function getAllFitnesspoints() {
        global $db;
        $result = array();
        
        $stmt = $db->query("select * from fitnesspoints order by id");
        foreach ($stmt as $row) {
            $result[] = new Fitnesspoint($row);
        }
        
        return $result;
    }   
}
?>