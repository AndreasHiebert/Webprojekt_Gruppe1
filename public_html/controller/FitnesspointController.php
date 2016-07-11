<?php


class FitnesspointController {

  public function testFitnessCode(){
      global $smarty;

      $repo= new AchievementRepository();
      $achievementObjects=$repo->getAllAchievements();
      $repoFitness = new FitnesspointRepository();
      $fitnesspointObjects=$repoFitness->getAllFitnesspoints();
      $codeValid = FALSE;
      $code = $_POST['code_input'];

      foreach ($achievementObjects as $item) {
        $CodeArray[] = $item->getCode();
            }

      $key = array_search($code, $CodeArray);
      $id_user = $_SESSION["currentUser"]->getId();
      $id_achievement =$achievementObjects[$key]->getId();

        foreach($achievementObjects as $value){
          if(in_array($code, $CodeArray, true)){
            $codeValid = true;
            }
        }

        foreach ($fitnesspointObjects as $fitnesspoint){
            if ($fitnesspoint->getUserId() == $id_user && $fitnesspoint->getAchievementId() == $id_achievement){
                $codeValid = false;
                $smarty->assign("codeFalse",TRUE);
                $smarty->assign("error",1);
            }
        }

        $achievementTime = strtotime($achievementObjects[$key]->getCreatedDate());

        if(($achievementTime+3600) <= time()){
            $codeValid = false;
            $smarty->assign("codeFalse",TRUE);
            $smarty->assign("error",2);
        }

        if($codeValid){
          $fitnesspoint = new Fitnesspoint();
          $fitnesspoint->setUserId($id_user);
          $fitnesspoint->setAchievementId($id_achievement);
          FitnessPointRepository::saveFitnesspoint($fitnesspoint);
          $smarty->assign("codeValid",$codeValid);
        }

        $achievementController = new AchievementController();
        return $achievementController->showAchievements();
        }

}
?>
