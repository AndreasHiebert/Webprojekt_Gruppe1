<?php

class ModuleRepository {
   public function getAllModules() {
        global $db;
        $result = array();

        $stmt = $db->query("SELECT * FROM modules ORDER BY semester ASC");
        foreach ($stmt as $row) {
            $result[] = Module::fromArray($row);
        }

        return $result;
    }

    public static function saveModule($modul) {
        global $db;

        $stmt = $db->prepare("INSERT INTO modules (name, abbrieviation, description, status, cp, semester) "
                . "values (:name, :abbrieviation, :description, :status, :cp, :semester)");
        $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':abbrieviation', $user->getAbbrieviation(), PDO::PARAM_STR);
        $stmt->bindValue(':description', $user->getDescription(), PDO::PARAM_STR);
        $stmt->bindValue(':status', $user->getStatus(), PDO::PARAM_INT);
        $stmt->bindValue(':cp', $user->getCp(), PDO::PARAM_INT);
        $stmt->bindValue(':semester', $user->getSemester(), PDO::PARAM_INT);

        $stmt->execute();
    }
}
?>
