<?php

class ModuleController {
    
    public function showModules(){
        global $smarty;
        $smarty->display("../view/show_Modulplan.html");
    }
    
    public function enterGrade($userId, $moduleId)
    {
        global $smarty;
        $grade = Grade::fromArray($_REQUEST);
        GradeRepository::saveGrade($grade);        
    }
}
