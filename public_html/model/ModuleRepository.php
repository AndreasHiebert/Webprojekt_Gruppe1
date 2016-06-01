<?php

class ModuleRepository {
   public function getAllModules() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * from modules order by id");
        foreach ($stmt as $row) {
            $result[] = new Module($row);
        }

        return $result;
    }
}
?>
