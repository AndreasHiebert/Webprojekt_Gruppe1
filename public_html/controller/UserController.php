<?php


class UserController {

  public function logoutUser(){
    global $smarty;
    // remove all session variables
    SESSION_UNSET();
    return $this->showLogin();
    }

    public function logoutInstructor(){
    global $smarty;
    // remove all session variables
    SESSION_UNSET();
    return $this->showLogin();
  }

  public function showLogin(){
    global $smarty;
    // remove all session variables
    SESSION_UNSET();
    return $smarty->fetch("../view/show_Login.html");
  }
}
?>
