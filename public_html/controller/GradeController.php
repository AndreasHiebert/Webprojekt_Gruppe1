<?php


class GradeController {

  public function enterGrade() {
      global $smarty;

      $userId = $_POST['user_id'];
      $moduleId = $_POST['module_id'];
      $gradeIn = $_POST['grade_input'];


      $grade = new Grade();
      $grade->setUserId($userId);
      $grade->setModuleId($moduleId);
      $grade->setGrade($gradeIn);

      $repo = new GradeRepository();
      $passed = $repo->gradeAlreadyPassed($moduleId);

      if (!$passed and $gradeIn <= 4 and $gradeIn >= 1) {
          GradeRepository::saveGrades($grade);
      } else if ($passed and $gradeIn <= 4 and $gradeIn >= 1) {
          GradeRepository::updateGrades($grade);
      } else {
          $smarty->assign("gradeError", true);
      }

      $moduleView = new ModuleController();
      return $moduleView->showModulplan();
  }
}
?>
