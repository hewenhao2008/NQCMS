<?php
// echo md5('admin');die;
// 设置编码
header('Content-type:text/html;charset=utf-8');
//设置时区
date_default_timezone_set("PRC");
//开启调试模型
define('DEBUG',True);
//显示DEBUG面板
//define('DEBUG_TOOL',true);
//指量创建模块
define('MODULE_LIST','Index,Admin');
//应用目录
define('APP_PATH','NQCMS/');
//引入框架
require '../hdphp/hdphp/hdphp.php';
?>