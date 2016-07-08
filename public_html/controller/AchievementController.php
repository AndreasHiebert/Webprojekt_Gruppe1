<?php


class AchievementController {

  public function showAchievements(){
    global $smarty;
    $repo = new AchievementRepository();
    $userAchievements = $repo->getCurrentUserAchievements();
    $smarty->assign("userAchievements", $userAchievements);
    return $smarty->fetch("../view/show_Achievements.html");
  }

}
?>
