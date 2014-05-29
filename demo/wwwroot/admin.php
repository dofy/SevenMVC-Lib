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

// 开发环境 (后台可能用到 ajax 传输数据，需要禁用 Debug 信息)
/*
define('DEBUG', false); 
define('SMARTY_CACHE', false);
define('SMARTY_DEBUG', false); 
*/
// 生产环境 (表单编辑频繁的话，禁用 Smarty 缓存)
define('DEBUG', false);
define('SMARTY_CACHE', false);
define('SMARTY_DEBUG', false);

// 一般情况下库文件应放在 libs 文件夹中
include USER_CODE_PATH . '../src/SevenApplication.php';

// new controller
$app = new SevenApplication('c', 'a', 'a_');

// run
$app->run();
?>