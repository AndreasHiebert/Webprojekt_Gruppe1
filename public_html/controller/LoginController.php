<?php

class LoginController {

  public function showLogin(){
    $userController = new UserController;
    return $userController->showLogin();
  }

  public function getUserRegistrationForm(){
    global $smarty;
    $currentUser = NULL;
    $smarty->assign("currentUser", $currentUser);
    $currentInstructor = NULL;
    $smarty->assign("currentInstructor", $currentInstructor);
    return $smarty->fetch("../view/UserRegistration.html");
  }

  public function RegisterUser(){
    $servername = "localhost";
    $name = "username";
    $password = "password";
    $dbname = "webprojekt13";
    $conn = new mysqli($servername, $name, $password, $dbname);

    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }

    $result = $mysqli->query("SELECT id FROM users ORDER BY name");
    $id = $result->num_rows;

    $UserName = mysql_real_escape_string($_POST["name_txt"]);
    $UserPassword = mysql_real_escape_string($_POST["pass_txt"]);
    $EMail = mysql_real_escape_string($_POST["email_txt"]);
    $ActiveCourse = mysql_real_escape_string($_POST["course_txt"]);

    $sql = "INSERT INTO users(id, name, password, email, activeCourse, fitnesspoints)
            VALUES($id+1,$UserName, $UserPassword, $EMail, $ActiveCourse, 0)";

    if($conn->query($sql) === TRUE){
        echo "New user created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  }

  public function LoginRegisteredUser(){

    global $smarty;
    global $currentUser;
    //include '../controller/ModuleController.php';

    SESSION_START();

    try {
        $db = new PDO("mysql:host=localhost;dbname=webprojekt", "root");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die;
    }

        $_Name = $_POST["email_txt"];
        $_Password = $_POST["pass_txt"];

        $repo = new UserRepository();
        $existingUser = $repo->testUserLogin($_Name , $_Password);

        if($existingUser == TRUE){
            $currentUser = $repo->CorrectUser($_Name , $_Password);
            $smarty->assign("currentUser", $currentUser,"global");
            $smarty->assign("loginUser", $currentUser,"global");

            echo "Login erfolgreich.<br>";
            $moduleController = new ModuleController();
            return $moduleController->showModulplan();
        }else{
            $error = "Your Login Name or Password is invalid";
        }
  }
   
  public function getInstructorRegistrationForm(){
    global $smarty;
    $currentUser = NULL;
    $smarty->assign("currentUser", $currentUser);
    $currentInstructor = NULL;
    $smarty->assign("currentInstructor", $currentInstructor);
    return $smarty->fetch("../view/InstructorRegistration.html");
  }

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
  }

}

?>
