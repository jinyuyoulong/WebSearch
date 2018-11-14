<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\model\User;
use think\Loader;

class Index extends Controller
{
    public function index()
    {

//        $result = User::get(1);// 1
//        $user = new User(); // 2
//        $user = Loader::model('User');// 3
        $user = model('User'); // 4 助手函数

        # 推荐使用前两种方式

        $result = $user::get(5);
        
        $result = $result->toArray();

        dump($result);

    }
}