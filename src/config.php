<?php

// ====================================
// === 数据库配置 (暂时只支持 MySQL) ===
// ====================================

// 数据库服务器
defined('DB_HOST') or define('DB_HOST', 'localhost');
// 数据服务端口
defined('DB_PORT') or define('DB_PORT', 3306);
// 数据库用户名
defined('DB_USER') or define('DB_USER', '');
// 用户密码
defined('DB_PASS') or define('DB_PASS', '');
// 数据库名
defined('DB_NAME') or define('DB_NAME', 'test');
// 数据库编码
defined('DB_CHAR') or define('DB_CHAR', 'utf8');

// =================
// === 其他配置项 ===
// =================

// 是否显示 debug 信息
defined('DEBUG') or define('DEBUG', false);

// 是否开启 smarty cache
defined('SMARTY_CACHE') or define('SMARTY_CACHE', true);
// 
defined('SMARTY_DEBUG') or define('SMARTY_DEBUG', false);

// 用户代码路径 (controllers, models 等文件夹所在位置）
defined('USER_CODE_PATH') or define('USER_CODE_PATH', __BASE_PATH . '..' . __DS);
?>