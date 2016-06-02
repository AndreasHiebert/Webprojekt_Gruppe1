<?php
// login
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

$smarty = new Smarty();
$smarty->template_dir = "view";
$smarty->compile_dir = "compile";
$smarty->cache_dir = "cache";

// connect to db
try {
    $db = new PDO("mysql:host=localhost;dbname=webprojekt", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die;
}

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

//$smarty->display("Homepage.html");
$smarty->display("Login.html");
//$smarty->display("Registration.html");
//$smarty->display("Homepage.html");
//$smarty->display("Instructor.html");
//$smarty->display("Fitnesspoints.html");
//$smarty->display("main.html");

?>
