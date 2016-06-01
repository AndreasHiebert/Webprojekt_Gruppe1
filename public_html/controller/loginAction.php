<?php

$studeturl="../view/Homepage.html";
$instructorurl="../view/Instructor.html";
$errorurl="../view/Error404.html"

$student = "student";
$instructor = "instructor";

$entered_email = $_GET["email_txt"];
$entered_pass = $_GET["pass_txt"];

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

?>
