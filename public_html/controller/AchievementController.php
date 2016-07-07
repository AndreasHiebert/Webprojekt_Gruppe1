<?php


class AchievementController {

  public function showAchievements(){
    global $smarty;
    return $smarty->fetch("../view/show_Achievements.html");
  }

}
?>
