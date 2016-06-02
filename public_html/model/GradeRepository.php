<?php

class GradeRepository {

    public function getAllGrades() {
        global $db;
        $result = array();

        $stmt = $db->querry("select * from grades order by id");
        foreach ($stmt as $row) {
            $result[] = new Grade($row);
        }

        return $result;
    }

}

?>