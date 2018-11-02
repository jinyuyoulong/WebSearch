<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//Route::get('/think', function () {
//    return 'hello,ThinkPHP5!';
//});

// GET 方法
Route::get('/','index/index');
Route::get('demo','index/demo');
//http://localhost/www/thinkphp/public/index/demo

// 注册路由到controller模块的Index控制器的index类的hello操作
// 使用controller index.php 中的hello方法 静态地址和动态地址结合
Route::get('hello/:name', 'index/hello');//http://localhost/www/thinkphp/public/index/hello/fan
Route::get('test','index/test');

//Route::rule('/','index/index','GET');
//Route::rule('demo','index/demo','GET');

//Route::controller('user','index/User');
Route::controller('/test/index','test/index');