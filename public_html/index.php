<?php

require 'vendor/autoload.php';
require 'model/Topic.php';
require 'model/TopicRepository.php';

$smarty = new Smarty();
$smarty->template_dir = "view";
$smarty->compile_dir = "compile";
$smarty->cache_dir = "cache";

try {
    $db = new PDO("mysql:host=localhost;dbname=thesis", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die;
}

$repo = new TopicRepository();
$objects = $repo->getAllTopics();

$smarty->assign("topics", $objects);
$smarty->display("main.html");