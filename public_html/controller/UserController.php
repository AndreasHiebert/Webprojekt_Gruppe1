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

  public function showHome(){
    global $smarty;
    $smarty->fetch("../view/Home.html");
  }

  public function logoutUser(){
    global $smarty;
    $currentUser = NULL;
    $smarty->assign("currentUser", $currentUser);
    $smarty->fetch("../view/Home.html");
  }

  public function logoutInstructor(){
    global $smarty;
    $currentInstructor = NULL;
    $smarty->assign("currentInstructor", $currentInstructor);
    $smarty->fetch("../view/Home.html");
  }

  public function login(){
    global $smarty;
    $smarty->fetch("../view/Login.html");
  }

  public function showAdminTools(){
    global $smarty;
    $smarty->fetch("../view/Instructor.html");
  }
}
?>
