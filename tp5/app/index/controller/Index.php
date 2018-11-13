<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
//        dump(config('database'));
//        $result = Db::connect(); // 1
//        $result = Db::connect([   // 2
//            'type'            => 'mysql',
//            'hostname'        => '127.0.0.1',
//            'database'        => 'course',
//            'username'        => 'root',
//            'password'        => '33389',
//            'hostport'        => '3306',
//            'dsn'             => '',
//            'params'          => [],
//            'charset'         => 'utf8',
//            'prefix'          => '',
//        ]);
        // 3
//        $result = Db::connect("mysql://root_usr:333@127.0.0.1:3306/course#utf8");
        // 4
        $result = Db::connect('db_config_01');
        dump($result);
    }

    public function page1()
    {
        $this->assign('title', 'page1');
        return $this->fetch();
    }
}