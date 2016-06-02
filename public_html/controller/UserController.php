<?php

$registrationurl="../view/Registration.html"
$userurl="../view/Homepage.html";
$instructorurl="../view/Instructor.html";
$errorurl="../view/Error404.html";

$user = "user";
$instructor = "instructor";

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
          TopicRepository::saveTopic($topic);
      }
  }
}

/*
{foreach from=$users item=$user}
  if($entered_email==={$user->getEmail()}){
    if($entered_pass==={$user->getPassword()}){
      if($user->getType==={$instructor}){
        header("location:$instructorurl");
      }else{
        header("location:$studeturl");
      }
    } else{
      header("location:fail.$errorurl");
    }
  } else{
    header("location:fail.$errorurl");
  }
{/foreach}
*/
?>
