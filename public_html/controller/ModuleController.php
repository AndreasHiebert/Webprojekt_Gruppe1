<?php


class ModuleController {

<<<<<<< HEAD
    public function showModules() {
=======
    public function showModules(){
>>>>>>> 564423e70b28488141ec690e480c1dbfee1549e7
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

<<<<<<< HEAD
    public function enterGrade($userId, $moduleId) {
=======
    public function enterGrade($userId, $moduleId)
    {
>>>>>>> 564423e70b28488141ec690e480c1dbfee1549e7
        global $smarty;
        $grade = Grade::fromArray($_REQUEST);
        GradeRepository::saveGrade($grade);
    }

}
