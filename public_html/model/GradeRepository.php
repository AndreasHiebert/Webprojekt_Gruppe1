<?php

class GradeRepository {
    public function getAllGrades() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * from grades order by id");
        foreach ($stmt as $row) {
            $result[] = Grade::fromArray($row);
        }

        return $result;
    }

}

?>
