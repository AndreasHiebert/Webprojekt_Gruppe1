<?php


class GradeController {

  public function enterGrade() {
      global $smarty;

      $userId = $_POST['user_id'];
      $moduleId = $_POST['module_id'];
      $gradeIn = $_POST['grade_input'];

      $search = ",";
      $replace = ".";
      $gradeIn = str_replace ($search, $replace, $gradeIn);

      $grade = new Grade();
      $grade->setUserId($userId);
      $grade->setModuleId($moduleId);
      $grade->setGrade($gradeIn);

      $repo = new GradeRepository();
      $passed = $repo->gradeAlreadyPassed($moduleId);

      if (!$passed and $gradeIn <= 4 and $gradeIn >= 1) {
          GradeRepository::saveGrade($grade);
      } else if ($passed and $gradeIn <= 4 and $gradeIn >= 1) {
          GradeRepository::updateGrade($grade);
      } else {
          $smarty->assign("gradeError", true);
      }

      $moduleView = new ModuleController();
      return $moduleView->showModulplan();
  }
}
?>
