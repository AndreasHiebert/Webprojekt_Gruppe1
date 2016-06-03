<?php
require 'vendor/autoload.php';

require 'model/User.php';
require 'model/UserRepository.php';
require 'model/Module.php';
require 'model/ModuleRepository.php';
require 'model/Fitnesspoint.php';
require 'model/FitnesspointRepository.php';
require 'model/Course.php';
require 'model/CourseRepository.php';
require 'model/Achievement.php';
require 'model/AchievementRepository.php';
require 'model/Instructor.php';
require 'model/InstructorRepository.php';
require 'model/Grade.php';
require 'model/GradeRepository.php';

require 'controller/UserController.php';

//------------------------------------------------------------------------------
// setup smarty

$smarty = new Smarty();
$smarty->template_dir = "view";
$smarty->compile_dir = "compile";
$smarty->cache_dir = "cache";
//------------------------------------------------------------------------------
// connect to db

try {
    $db = new PDO("mysql:host=localhost;dbname=webprojekt", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die;
}

//------------------------------------------------------------------------------
// assign repositorys to smarty from data classes

$repo = new UserRepository();
$userObjects = $repo->getAllUsers();
$smarty->assign("users", $userObjects);

$repo = new InstructorRepository();
$instructorObjects = $repo->getAllInstructors();
$smarty->assign("instructors", $instructorObjects);

$repo=new ModuleRepository();
$moduleObjects=$repo->getAllModules();
$smarty->assign("modules", $moduleObjects);

$repo=new FitnesspointRepository();
$fitnesspointObjects=$repo->getAllFitnesspoints();
$smarty->assign("fitnesspoints", $fitnesspointObjects);

$repo=new CourseRepository();
$courseObjects=$repo->getAllCourses();
$smarty->assign("courses", $courseObjects);

$repo=new AchievementRepository();
$achievementObjects=$repo->getAllAchievements();
$smarty->assign("achievements", $achievementObjects);

$repo=new GradeRepository();
$gradeObjects=$repo->getAllGrades();
$smarty->assign("grades", $gradeObjects);

//------------------------------------------------------------------------------
// controller
/*
if (isset($_REQUEST["controller"])) {
    $controller_name = $_REQUEST["controller"];
} else {
    $controller_name = "UserController";
}

if (isset($_REQUEST["action"])) {
    $action_name = $_REQUEST["action"];
} else {
    $smarty->display("Login.html");
}

$controller = new $controller_name;

$userContent = $controller->$action_name();
$smarty->assign("user_content", $userContent);

$instructorContent = $controller->$action_name();
$smarty->assign("instructor_content", $instructorContent); //


*/
$currentUser = new User();
$currentInstructor = new Instructor();

//------------------------------------------------------------------------------
// check if logged in, show correct landingPage

if($currentUser->getId() != 0){
  $smarty->display("Homepage.html");
} elseif($currentInstructor->getId() != 0){
    $smarty->display("Instructor.html");
  } else {
    $smarty->display("Login.html");
}


//$smarty->display("Registration.html");
//$smarty->display("Homepage.html");
//$smarty->display("Instructor.html");
//$smarty->display("Fitnesspoints.html");
$smarty->display("main.html");

?>
