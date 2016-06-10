<?php


class LoginController {

  public function showLogin(){
    global $smarty;
    $smarty->display("../view/Login.html");
  }

  public function getRegistrationForm(){
    global $smarty;
    $smarty->display("../view/Registration.html");
  }

  public function loginUser() {
      global $smarty;
      $user = User::fromArray($_REQUEST);
      $smarty->display("../view/Homepage.html");
      //$error = $user->validate();
      // check if credentials match, then set $currentUser = $user with entered email and password
  //    if ($error->hasErrors()) {
  //        $smarty->assign("email", $email);
  //        $smarty->assign("password", $password);
  //        return $smarty->display("../view/Login.html");
  //    } else {
          // login user here
          /*
          if($currentUser->getId() != 0){
             $smarty->display("Homepage.html");
          } elseif($currentInstructor->getId() != 0){
             $smarty->display("Instructor.html");
            } else {
             $smarty->display("Login.html");
          }
          */
    //  }
  }

  public function loginInstructor() {
      global $smarty;
      $user = User::fromArray($_REQUEST);
      $smarty->display("../view/Instructor.html");
      //$error = $user->validate();

      //if ($error->hasErrors()) {
      //    $smarty->assign("email", $email);
      //    $smarty->assign("password", $password);
      //    return $smarty->display("../view/Login.html");
    //  } else {
          // login instructor here
    //  }
  }
}

?>
