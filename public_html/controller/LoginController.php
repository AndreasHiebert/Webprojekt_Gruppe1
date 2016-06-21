<?php


class LoginController {

  public function showLogin(){
    global $smarty;
    $smarty->fetch("../view/Login.html");
  }

  public function getUserRegistrationForm(){
    global $smarty;
    $smarty->fetch("../view/UserRegistration.html");
  }

  public function RegisterUser($UserName, $UserPassword, $EMail, $ActiveCourse){
    $servername = "localhost";
    $name = "username";
    $password = "password";
    $dbname = "webprojekt6";
    $conn = new mysqli($servername, $name, $password, $dbname);

    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }

    $result = $mysqli->query("SELECT id FROM users ORDER BY name");
    $id = $result->num_rows;

    $sql = "INSERT INTO users(id, name, password, email, activeCourse, fitnesspoints)
            VALUES($id+1 $UserName, $UserPassword, $EMail, $ActiveCourse, 0)";

    if($conn->query($sql) === TRUE){
        echo "New user created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  }

  public function LoginRegisteredUser($EMail, $UserPassword){
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "webprojekt6";

    SESSION_START();

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }

    if(!empty($_POST["submit"])){

        $User_Name = mysql_real_escape_string($_POST["$EMail"]);
        $User_Password = mysql_real_escape_string($_POST["$UserPassword"]);

        $sql = "SELECT * FROM users WHERE
                name='$User_Name' AND
                password ='$User_Password'
                LIMIT 1";

        $res = mysql_query($sql, $conn);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        if($count == 1){
            session_register("$User_Name");
            $_SESSION['login_user'] = $User_Name;

            header("location: Homepage.html");
        }else{
            $error = "Your Login Name or Password is invalid";
        }
    }

  }

    public function loginUser() {
      global $smarty;
      //$user = User::fromArray($_REQUEST);
      $currentUser = $userObjects[0];
      $smarty->assign("currentUser", $currentUser);
      $smarty->fetch("../view/Homepage.html");
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

  public function getInstructorRegistrationForm(){
    global $smarty;
    $smarty->fetch("../view/InstructorRegistration.html");
  }

  public function RegisterInstructor($UserName, $UserPassword, $EMail){

    $servername = "localhost";
    $name = "username";
    $password = "password";
    $dbname = "webprojekt6";
    $conn = new mysqli($servername, $name, $password, $dbname);

    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }

    $result = $mysqli->query("SELECT id FROM instructors ORDER BY name");
    $id = $result->num_rows;

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
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "webprojekt6";

    SESSION_START();

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }

    if(!empty($_POST["submit"])){

        $User_Name = mysql_real_escape_string($_POST["$EMail"]);
        $User_Password = mysql_real_escape_string($_POST["$UserPassword"]);

        $sql = "SELECT * FROM instructors WHERE
                name='$User_Name' AND
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

  public function loginInstructor() {
      global $smarty;
      //$user = User::fromArray($_REQUEST);
      $currentInstructor = $instructorObjects[0];
      $smarty->assign("currentInstructor", $currentInstructor);
      $smarty->fetch("../view/Instructor.html");
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
