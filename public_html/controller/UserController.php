<?php


class UserController {

  public function showModulplan(){
    global $smarty;
    $modulplan = "../view/show_Modulplan.html";

    return $smarty->display($modulplan);
    //$smarty->display("../view/show_Modulplan.html");
  }

  public function showAchievements(){
    global $smarty;
    $smarty->display("../view/show_Achievements.html");
  }

  public function logout(){
    global $smarty;
    $smarty->display("../view/Login.html");
  }

  /*
  public function saveUser() {
      global $smarty;
      $user = User::fromArray($_REQUEST);
      $error = $user->validate();

      if ($error->hasErrors()) {
          $smarty->assign("user", $user);
          $smarty->assign("error", $error);
          return $smarty->display("../view/Registration.html");
      } else {
          UserRepository::saveUser($user);
      }
  }
  */

  //public function showLogin() {
  //    global $smarty;
  //    $objects = UserRepository::getAllUsers();
  //    $smarty->assign("users", $objects);
  //    return $smarty->display("../view/Login.html");
  //}


//  public function login(){
//    global $smarty;
//    $smarty->display("../view/homepage.html");
/*    $user = User::fromArray($_REQUEST);
    // get the user with matching email and password into $currentUser, else error
    $currentUser = UserRepository::login($user->getEmail, $user->getPassword);

    if($currentUser->getId = 0){
      // login failed
      $smarty->display("../view/Login.html");
    } else {
      // login sucessfull
      $smarty->display("../view/Homepage.html");
    }

    $_success = $currentUser->login($email,$password);
      if($_success === true){
        $smarty->display("../view/Homepage.html");
        } else {
        // show login error here
      }

    //global $smarty;
    //$objects = UserRepository::getAllUsers();
    //$user = User::fromArray($_REQUEST);

    //if($_user){

    //}
    //$smarty->display("../view/Registration.html");
  //  if ($error->hasErrors()) {
  //      $smarty->assign("user", $user);
//        $smarty->assign("error", $error);
//        return $smarty->display($registrationurl);
  //  } else {
  /*      foreach ($users as $user_item){ //?  Parse error: syntax error, unexpected 'from' (T_STRING), expecting '(' in C:\xampp\htdocs\WebProjekt\public_html\controller\UserController.php on line 32
          if ($user->getEmail === $user_item->getEmail) {
            if($user->getPassword === $user_item->getPassword){
              $currentUser = $user_item;
              //$smarty->display($userurl);
            } else {
              $smarty->assign("error_failPass", $error);
            }
          } else {
            $smarty->assign("error_failEmail", $error);
          }
        }
      }*/
//  }

}

?>
