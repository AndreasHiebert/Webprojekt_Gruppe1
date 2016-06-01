<?php

$studeturl="../view/Homepage.html";
$instructorurl="../view/Instructor.html";
$errorurl="../view/Error404.html"

$entered_email = $_GET["email_txt"];
$entered_pass = $_GET["pass_txt"];


 if($entered_email==={user->getEmail}){
   header("location:$instructorurl");
 } else {
   header("location:fail.$errorurl");
 }

{foreach from=$users item=$user}
  if($_GET["email_txt"]==={user->getEmail}){
{/foreach}

?>
($_GET["pass_txt"]===$userPass)
