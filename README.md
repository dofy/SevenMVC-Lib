# SevenMVC-Lib

## 基于 MVC 的 PHP 轻量级框架

```php
<?php
session_start();

// config
define('DB_HOST', 'YOUR DATABASE HOST');    // default: localhost
define('DB_USER', 'YOUR DATABASE USER');
define('DB_PASS', 'PASSWORD');
define('DB_NAME', 'DATABASE NAME');         // default: test

// project folder
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
```
