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
require 'controller/ModuleController.php';
require 'controller/LoginController.php';
require 'controller/AchievementController.php';
require 'controller/FitnesspointController.php';
require 'controller/InstructorController.php';
require 'controller/GradeController.php';

//------------------------------------------------------------------------------
// start session and setup smarty
SESSION_START();

$smarty = new Smarty();
$smarty->template_dir = "view";
$smarty->compile_dir = "compile";
$smarty->cache_dir = "cache";



// disabled all unimportant notice errors
error_reporting(0);
error_reporting(E_ALL ^  E_NOTICE);
//------------------------------------------------------------------------------
// connect to db
try {
    $db = new PDO("mysql:host=localhost; dbname=webprojekt", "root");
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

$repo= new ModuleRepository();
$moduleObjects=$repo->getAllModules();
$smarty->assign("modules", $moduleObjects);

$repo= new FitnesspointRepository();
$fitnesspointObjects=$repo->getAllFitnesspoints();
$smarty->assign("fitnesspoints", $fitnesspointObjects);

$repo= new CourseRepository();
$courseObjects=$repo->getAllCourses();
$smarty->assign("courses", $courseObjects);

$repo= new GradeRepository();
$gradeObjects=$repo->getAllGrades();
$smarty->assign("grades", $gradeObjects);

$repo= new AchievementRepository();
$achievementObjects=$repo->getAllAchievements();
$smarty->assign("achievements", $achievementObjects);

//------------------------------------------------------------------------------
// controller

if (isset($_REQUEST["controller"])) {
    $controller_name = $_REQUEST["controller"];
} else {
    $controller_name = "LoginController";
}

if (isset($_REQUEST["action"])) {
    $action_name = $_REQUEST["action"];
} else {
    $action_name = "showLogin";
}

$controller = new $controller_name;
$content = $controller->$action_name();
$smarty->assign("homepage_content", $content);
$smarty->display("../view/Homepage.html");
?>
