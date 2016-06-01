<?php

class UserRepository {
    public function getAllUsers() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * from users order by id");
        foreach ($stmt as $row) {
            $result[] = new User($row);
        }

        return $result;
    }
}
?>
