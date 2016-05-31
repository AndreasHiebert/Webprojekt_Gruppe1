<?php

require 'vendor/autoload.php';
<<<<<<< HEAD
require 'model/User.php';
require 'model/UserRepository.php';
=======
require 'model/Topic.php';
require 'model/TopicRepository.php';
>>>>>>> b05818d98430249634144a9f92c0bf19d31b713f

$smarty = new Smarty();
$smarty->template_dir = "view";
$smarty->compile_dir = "compile";
$smarty->cache_dir = "cache";

try {
<<<<<<< HEAD
    $db = new PDO("mysql:host=localhost;dbname=webprojekt", "root");
=======
    $db = new PDO("mysql:host=localhost;dbname=thesis", "root");
>>>>>>> b05818d98430249634144a9f92c0bf19d31b713f
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die;
}

<<<<<<< HEAD
$repo = new UserRepository();
$objects = $repo->getAllUsers();

$smarty->assign("users", $objects);
//$smarty->display("Homepage.html");
$smarty->display("Login.html");
$smarty->display("main.html");
=======
$repo = new TopicRepository();
$objects = $repo->getAllTopics();

$smarty->assign("topics", $objects);
$smarty->display("main.html");
>>>>>>> b05818d98430249634144a9f92c0bf19d31b713f
