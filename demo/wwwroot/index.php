<?php
session_start();

// config

// include files
// 一般情况下库文件应放在 libs 文件夹中
include dirname(__FILE__) . '/../../src/SevenApplication.php';

// new controller
$app = new SevenApplication();

// run
$app->run();


?>