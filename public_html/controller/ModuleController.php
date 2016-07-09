<?php


class ModuleController {

  public function showModulplan(){
    global $smarty;

    $repo = new ModuleRepository();

    $semesterMax = $repo->getHighestSemester();
    $smarty->assign("semesterMax",$semesterMax);

    $allModules = $repo->getAllModules();
    $smarty->assign("allModules",$allModules);

    $semester = 1;
    $smarty->assign("semester",$semester);

    $smarty->assign("currentUser", $_SESSION["currentUser"]);
    return $smarty->fetch("../view/show_Modulplan.html");
  }

    public function enterGrade()
    {
        global $smarty;

//        $grade = Grade::fromArray($_REQUEST);

        $userId = $_POST['user_id'];
        $moduleId = $_POST['module_id'];
        $gradeIn = $_POST['grade_input'];

        $grade = new Grade();
        $grade->setUserId($userId);
        $grade->setModuleId($moduleId);
        $grade->setGrade($gradeIn);


        GradeRepository::saveGrades($grade);

        $moduleView = new ModuleController();
        return $moduleView->showModulplan();
    }

    public function getMaxCp(){
        $maxCp = 0;
        $userCourseId = $_SESSION["currentUser"]->getCourse();
        $courseObjects = $repoCourses->getAllCourses;

        foreach ($courseObjects as $course)
        {
            if($userCourseId == $course->getId())
            {
                $maxCp = $course->getMaxCp();
                return $maxCp;
            }
        }

        return $maxCp;
    }

    public function getCurrentCp() {
        $currentCp = 0;

        $moduleObjects = $repoModules->getAllModules();

        foreach($moduleObjects as $module)
        {
            if(completedModule($module->getId()))
            {
                $currentCp += $module->getCp();
            }
        }

        return $currentCp;
    }

    public function getCurrentCpPercent()
    {
        $currentCp = getCurrentCp();
        $maxCp = getMaxCp();
        $currentCpPercent = ($currentCp/$maxCp) * 100;

        return $currentCpPercent;
    }

}
?>
