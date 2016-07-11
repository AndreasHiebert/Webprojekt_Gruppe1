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
      $UserExists = $UserRepo->testUserLogin($UserMail, $UserPassword);
      
      if($UserExists == TRUE){
      $_User = new User();
      $_User->setName($_POST["username_txt"]);
      $_User->setEmail($UserMail);
      $_User->setActiveCourse($_POST["course_txt"]);
        if($_POST["pass_txt"] == $_POST["confirm_txt"]){
        $_User->setPassword($UserPassword);
      }
      $_User->setRegDate($smarty->now|date_format);

      $_UserRepo = new UserRepository();
      $_UserRepo->saveUser($_User);
      }

      $LoginController = new LoginController();
      return $LoginController->showLogin();
  }

  public function LoginRegisteredUser(){
    global $smarty;

        $_Name = $_POST["email_txt"];
        $_Password = $_POST["pass_txt"];

        $repo = new UserRepository();
        $userExists = $repo->testUserLogin($_Name , $_Password);

        if($userExists == TRUE){

            $_SESSION["currentUser"] = $repo->setCorrectUser($_Name , $_Password);
            $smarty->assign("currentUser", $_SESSION["currentUser"]);

            $moduleController = new ModuleController();
            return $moduleController->showModulplan();
        }else{
            $error = "Your Login Name or Password is invalid";
        }
  }

  public function getInstructorRegistrationForm(){
    global $smarty;
    return $smarty->fetch("../view/show_InstructorRegistration.html");
  }
/*
  public function RegisterInstructor(){

    $servername = "localhost";
    $name = "username";
    $password = "password";
    $dbname = "webprojekt13";
    $conn = new mysqli($servername, $name, $password, $dbname);

    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }

    $result = $mysqli->query("SELECT id FROM instructors ORDER BY name");
    $id = $result->num_rows;

    $UserName = mysql_real_escape_string($_POST["name_txt"]);
    $UserPassword = mysql_real_escape_string($_POST["pass_txt"]);
    $EMail = mysql_real_escape_string($_POST["email_txt"]);

    $sql = "INSERT INTO instructors(id, name, password, email)
            VALUES($id+1, $UserName, $UserPassword, $EMail)";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  }

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
