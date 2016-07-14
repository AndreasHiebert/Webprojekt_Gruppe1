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
      $UserMail = $_POST["email_txt"];
      $UserPassword = $_POST["pass_txt"];

      $UserExists = $UserRepo->checkUserAvailability($UserMail);

      if($UserExists == FALSE){
      $_User = new User();
      $_User->setName($_POST["username_txt"]);
      $_User->setEmail($UserMail);

      $courseRepo = new CourseRepository();
      $courseAbbreviation = $_POST["course_txt"];
      $courseID = $courseRepo->getCourseIdFromAbbreviation($courseAbbreviation);
      $_User->setActiveCourse($courseID);
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
      $InstructorRepo = new InstructorRepository();
      $InstructorMail = $_POST["email_txt"];
      $InstructorPassword = $_POST["pass_txt"];
      $InstructorExists = $InstructorRepo->checkInstructorAvailability($InstructorMail);

      if($InstructorExists == FALSE){
      $_Instructor = new Instructor();
      $_Instructor->setName($_POST["username_txt"]);
      $_Instructor->setEmail($InstructorMail);
        if($_POST["pass_txt"] == $_POST["confirm_txt"]){
        $_Instructor->setPassword($InstructorPassword);
      }else{
          $error = "Password and confirmation dont match!";
      }
      $InstructorRepo->saveInstructor($_Instructor);
      $RegisterSuccess = TRUE;
      }

      $LoginController = new LoginController();
      if($RegisterSuccess == TRUE){
        return $LoginController->showLogin();
      }else{
          $error = "Instructor already exists";
      }
  }

  public function FacebookLogin(){
    $fb = new Facebook\Facebook([
    'app_id' => 'GamificationPlatform', // Replace {app-id} with your app id
    'app_secret' => '{app-secret}',
    'default_graph_version' => 'v2.2',
    ]);

    $helper = $fb->getRedirectLoginHelper();

    $permissions = ['email']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

    echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
  }
  /*
  public function FacebookLoginCallback(){
    $fb = new Facebook\Facebook([
    'app_id' => '{GamificationPlatform}', // Replace {app-id} with your app id
    'app_secret' => '{app-secret}',
    'default_graph_version' => 'v2.2',
    ]);

    $helper = $fb->getRedirectLoginHelper();

    try {
        $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
    exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

    if (! isset($accessToken)) {
        if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
    } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
    }
    exit;
    }

    // Logged in
    echo '<h3>Access Token</h3>';
    var_dump($accessToken->getValue());

    // The OAuth 2.0 client handler helps us manage access tokens
    $oAuth2Client = $fb->getOAuth2Client();

    // Get the access token metadata from /debug_token
    $tokenMetadata = $oAuth2Client->debugToken($accessToken);
    echo '<h3>Metadata</h3>';
    var_dump($tokenMetadata);

    // Validation (these will throw FacebookSDKException's when they fail)
    $tokenMetadata->validateAppId({GamificationPlatform}); // Replace {app-id} with your app id
    // If you know the user ID this access token belongs to, you can validate it here
    //$tokenMetadata->validateUserId('123');
    $tokenMetadata->validateExpiration();

    if (! $accessToken->isLongLived()) {
    // Exchanges a short-lived access token for a long-lived one
    try {
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
    exit;
    }

    echo '<h3>Long-lived</h3>';
    var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;

// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
//header('Location: https://example.com/members.php');
  } */
}

?>
