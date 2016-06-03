<?php

$loginurl="../view/Login.html";
$registrationurl="../view/Registration.html";
$userurl="../view/Homepage.html";
$errorurl="../view/Error404.html";

class UserController {
  public function saveUser() {
      global $smarty;
      $user = User::fromArray($_REQUEST);
      $error = $user->validate();

      if ($error->hasErrors()) {
          $smarty->assign("user", $user);
          $smarty->assign("error", $error);
          return $smarty->display($registrationurl);
      } else {
          UserRepository::saveUser($user);
      }
  }
/*
  public function login(){
    global $smarty;
    $user = User::fromArray($_REQUEST);

    if ($error->hasErrors()) {
        $smarty->assign("user", $user);
        $smarty->assign("error", $error);
        return $smarty->display($registrationurl);
    } else {
        {foreach from={$users} item=$user_item} //?  Parse error: syntax error, unexpected 'from' (T_STRING), expecting '(' in C:\xampp\htdocs\WebProjekt\public_html\controller\UserController.php on line 32
          if ($user->getEmail === $user_item->getEmail) {
            if($user->getPassword === $user_item->getPassword){
              $currentUser = $user_item;
              $smarty->display($userurl);
            } else {
              $smarty->assign("error_failPass", $error);
            }
          } else {
            $smarty->assign("error_failEmail", $error);
          }

        {/foreach}
      }
  }
*/
}

?>
