<?php


class UserController {

  public function logoutUser(){
    global $smarty;
    $currentUser = NULL;
    $smarty->assign("currentUser", $currentUser);
    $this->showLogin();

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
