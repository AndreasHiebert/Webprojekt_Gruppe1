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

  public function logout(){
    global $smarty;
    $smarty->display("../view/Login.html");
  }
}
?>
