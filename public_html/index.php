<?php
// login
require 'vendor/autoload.php';
require 'model/User.php';
require 'model/UserRepository.php';
require 'model/Module.php';
require 'model/ModuleRepository.php';

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
$repo=new ModuleRepository();
$moduleObjects=$repo->getAllModules();
$smarty->assign("modules", $moduleObjects);

//$smarty->display("Homepage.html");
$smarty->display("Login.html");
$smarty->display("main.html");

?>
