<?php
define('APP_PATH', __DIR__.'/../app/');
define('CONF_PATH', __DIR__.'/../conf/');
// 仅开放api模块 访问权限 ，没有模块，会访问默认模块，auto_bind_module->没有模块会报错！
// define('BIND_MODULE', 'api');

require(__DIR__.'/../thinkphp/start.php');

