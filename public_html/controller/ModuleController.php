<?php


class ModuleController {

    public function showModules(){
        global $smarty;


        $userCourse = $currentUser->getCourse();

        $repoCourses = new CourseRepository();
        $courseObjects = $repoCourses->getAllCourses();
        $smarty->assign("courses", $courseObjects);

        $repoModules = new ModuleRepository();
        $moduleObjects = $repoModules->getAllModules();
        $smarty->assign("modules", $moduleObjects);

        $userModules = array();

        foreach ($moduleObjects as $module) {
//            if ($module->getCourseId() == $userCourse) {
                $userModules[] = $module;
//            }
        }

        $smarty->display("../view/show_Modulplan.html");
    }

    public function enterGrade($userId, $moduleId)
    {
        global $smarty;
        $grade = Grade::fromArray($_REQUEST);
        GradeRepository::saveGrade($grade);
    }

}
