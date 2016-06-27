<?php


class UserController {

  public function showModulplan(){
    global $smarty;
    return $smarty->fetch("../view/show_Modulplan.html");
  }

  public function showAchievements(){
    global $smarty;
    return $smarty->fetch("../view/show_Achievements.html");
  }

  public function logoutUser(){
    global $smarty;
    $currentUser = NULL;
    $smarty->assign("currentUser", $currentUser);
    $this->showLogin();
  }

  
  public function getRanking(){
      global $smarty;
      
      $repo = new UserRepository;
      $sortedUser = $repo->getUserPosition();
      
      $key = array_search($currentUser->getActiveCourse , array_column($sortedUser, 'id'));
      $key = §key + 1;
      $smarty->assign("RankingPosition", $key);
  }
  
  public function testFitnessCode(){
      global $smarty;
      
      $repo= new AchievementRepository();
      $achievementObjects=$repo->getAllAchievements();
      
     $repoFitness = new FitnesspointRepository();
     $fitnesspointObjects=$repoFitness->getAllFitnesspoints();
      
      
      $codeValid = FALSE;     
      $code = $_POST['code_input'];

      //$key = array_search($code, array_column($achievementObjects, 'code'));
    
      
      
      foreach ($achievementObjects as $item) {
        $CodeArray[] = $item->getCode();
            }
            
      $key = array_search($code, $CodeArray);
    
      $id_user = /*$currentUser->getId()*/ 1;
      $id_achievement =$achievementObjects[$key]->getId();
      
      
                
      foreach($achievementObjects as $value){
          if(in_array($code, $CodeArray, true)){              
            $codeValid = true;
            }
        }
        
        foreach ($fitnesspointObjects as $fitnesspoint){
            if ($fitnesspoint->getUserId() == $id_user && $fitnesspoint->getAchievementId() == $id_achievement){
                $codeValid = false;
            }
        }
      
        if($codeValid){
            
          $fitnesspoint = new Fitnesspoint();
          $fitnesspoint->setUserId($id_user);
          $fitnesspoint->setAchievementId($id_achievement);
            
          FitnessPointRepository::saveFitnesspoint($fitnesspoint);
          $smarty->assign("codeValid",$codeValid);
          return $smarty->fetch("show_Achievements.html");
        }
  }
  
  public function getUserFitnessPoints(){
      global $smarty;
      
      $repo= new UserRepository();
      $FitnessPointsCurrent= $repo->getUserFitnessPoints();
      
      
      
      $smarty->assign("Fitnesspoints", $FitnessPointsCurrent);
      return $smarty->fetch("../view/show_Modulplan.html");
  }


  public function logoutInstructor(){
    global $smarty;
    $currentInstructor = NULL;
    $smarty->assign("currentInstructor", $currentInstructor);
    $this->showLogin();
  }

  public function showLogin(){
    global $smarty;
    $currentUser = NULL;
    $smarty->assign("currentUser", $currentUser);
    $currentInstructor = NULL;
    $smarty->assign("currentInstructor", $currentInstructor);
    return $smarty->fetch("../view/Login.html");
  }
}
?>
