<?php


class LoginController {

  public function showLogin(){
    global $smarty;
    $smarty->display("../view/Login.html");
  }

  public function getUserRegistrationForm(){
    global $smarty;
    $smarty->display("../view/UserRegistration.html");
  }
  
  public function RegisterUser($name, $UserPassword, $EMail, $ActiveCourse){
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "webprojekt6";
    $conn = new mysqli($servername, $username, $password, $dbname);
     
    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }
    
    $result = $mysqli->query("SELECT id FROM users ORDER BY name");
    $id = $result->num_rows;
     
    $sql = "INSERT INTO users(id, name, password, email, activeCourse, fitnesspoints)
            VALUES($name, $UserPassword, $EMail, $ActiveCourse, 0)";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
    $conn->close();
             
  }
  
    public function loginUser() {
      global $smarty;
      //$user = User::fromArray($_REQUEST);
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

  public function getInstructorRegistrationForm(){
    global $smarty;
    $smarty->display("../view/InstructorRegistration.html");
  }
  
  public function RegisterInstructor($name, $Userpassword, $EMail){
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "webprojekt6";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("COnnection failed: ".$conn->connect_error);
    }
    
    $result = $mysqli->query("SELECT id FROM instructors ORDER BY name");
    $id = $result->num_rows;
     
    $sql = "INSERT INTO instructors(id, name, password, email)
            VALUES($id+1, $name, $UserPassword, $EMail)";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
    $conn->close();
             
  }

  public function loginInstructor() {
      global $smarty;
      //$user = User::fromArray($_REQUEST);
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
