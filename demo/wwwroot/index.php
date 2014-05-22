<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/22 
 */

session_start();

// config
define('DB_USER', 'root');
define('USER_CODE_PATH', dirname(__file__) . '/../');

// 开发环境
/*
define('DEBUG', true);
define('SMARTY_CACHE', false);
define('SMARTY_DEBUG', true);
*/
// 生产环境
define('DEBUG', false);
define('SMARTY_CACHE', true);
define('SMARTY_DEBUG', false);

// 一般情况下库文件应放在 libs 文件夹中
include USER_CODE_PATH . '../src/SevenApplication.php';

// new controller
$app = new SevenApplication();

// run
$app->run();
?>