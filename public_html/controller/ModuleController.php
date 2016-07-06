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
            if ($module->getCourseId() == $userCourse) {
                $userModules[] = $module;
            }
        }

        $smarty->fetch("../view/show_Modulplan.html");
    }

    public function enterGrade($userId, $moduleId)
    {
        global $smarty;
        $grade = Grade::fromArray($_REQUEST);
        GradeRepository::saveGrade($grade);
    }
    
    public function completedModule($moduleId) {
        $userId = $currentUser->getId();
        $gradeObjects = $repoGrades->getAllGrades();
        
        
        foreach($gradeObjects as $grade)
        {
            if($moduleId == $grade->getModuleId() && $userId == $grade->getUserId())
            {
                if ($grade->getGrade() <= 4)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
        }
        return false;        
    }
    
    public function getMaxCp(){
        $maxCp = 0;
        $userCourseId = $currentUser->getCourse();
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
