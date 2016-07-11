<?php

class LoginController {

  public function showLogin(){
    global $smarty;
    // remove all session variables
    SESSION_UNSET();
    return $smarty->fetch("../view/show_Login.html");
  }

  public function getUserRegistrationForm(){
    global $smarty;
    return $smarty->fetch("../view/show_UserRegistration.html");
  }

  public function RegisterUser(){
      global $smarty;
      $UserRepo = new UserRepository();
      $UserMail = $_POST["username_txt"];
      $UserPassword = $_POST["pass_txt"];

      $UserExists = $UserRepo->checkUserAvailability($UserMail);
      print_r("$UserExists benutzer existiert");



      if($UserExists == FALSE){
      $_User = new User();
      $_User->setName($_POST["username_txt"]);
      $_User->setEmail($UserMail);

      $courseRepo = new CourseRepository();
      $courseAbbreviation = $_POST["course_txt"];
      $_User->setActiveCourse($courseRepo->getCourseIdFromAbbreviation($courseAbbreviation));
        if($_POST["pass_txt"] == $_POST["confirm_txt"]){
            print_r("passwort gültig");
        $_User->setPassword($UserPassword);
      }else{
          $error = "Password and confirmation dont match.";
      }
      $UserRepo->saveUser($_User);
      $RegisterSuccess = TRUE;
      }

      $LoginController = new LoginController();
      if($RegisterSuccess == TRUE){
      return $LoginController->showLogin();
      }else{
          $error = "User already exists";
      }
  }

  public function Login(){
    global $smarty;

        $_Name = $_POST["email_txt"];
        $_Password = $_POST["pass_txt"];

        $userRepository = new UserRepository();
        $instructorRepository = new InstructorRepository();

        if($userRepository->testUserLogin($_Name , $_Password) == TRUE){
            $_SESSION["currentUser"] = $userRepository->setCorrectUser($_Name , $_Password);
            $smarty->assign("currentUser", $_SESSION["currentUser"]);

            $moduleController = new ModuleController();
            return $moduleController->showModulplan();
        } else if($instructorRepository->testInstructorLogin($_Name , $_Password) == TRUE){
            $_SESSION["currentInstructor"] = $instructorRepository->setCorrectInstructor($_Name , $_Password);
            $smarty->assign("currentInstructor", $_SESSION["currentInstructor"]);

            $instructorController = new InstructorController();
            return $instructorController->showInstructorPage();
        } else {
            $error = "Your Login Name or Password is invalid";
        }
  }

  public function getInstructorRegistrationForm(){
    global $smarty;
    return $smarty->fetch("../view/show_InstructorRegistration.html");
  }

  public function RegisterInstructor(){
    global $smarty;
      $UserRepo = new InstructorRepository();
      $UserMail = $_POST["username_txt"];
      $UserPassword = $_POST["pass_txt"];
      $UserExists = $UserRepo->checkAvailability($UserMail);

      if($UserExists == FALSE){
      $_User = new Instructor();
      $_User->setName($_POST["username_txt"]);
      $_User->setEmail($UserMail);
        if($_POST["pass_txt"] == $_POST["confirm_txt"]){
        $_User->setPassword($UserPassword);
      }else{
          $error = "Pass and confirmation dont match!";
      }
      $UserRepo->saveInstructor($_User);
      $RegisterSuccess = TRUE;
      }

      $LoginController = new LoginController();
      if($RegisterSuccess == TRUE){
        return $LoginController->showLogin();
      }else{
          $error = "User already exists";
      }
  }
/*
  public function LoginRegisteredInstructor($EMail, $UserPassword){

    global $currentUser;

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "webprojekt13";

    SESSION_START();

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }

    if(!empty($_POST["submit"])){

        $User_Name = mysql_real_escape_string($_POST["$EMail"]);
        $User_Password = mysql_real_escape_string($_POST["$UserPassword"]);

        $sql = "SELECT * FROM instructors WHERE
                email='$User_Name' AND
                password ='$User_Password'
                LIMIT 1";

        $res = mysql_query($sql, $conn);
        $anzahl = @mysql_num_rows($res);

        if($anzahl > 0){
            session_register("$User_Name");
            $_SESSION['login_user'] = $User_Name;

            header("location: Homepage.html");
        }else{
            $error = "Your Login Name or Password is invalid";
        }
    }
  }*/

}

?>
