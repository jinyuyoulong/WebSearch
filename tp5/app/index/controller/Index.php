<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
//        $result = User::create([
//           'username'   =>  "imooc",
//           'email'      =>  "imooc@qq.com",
//           'num'        =>  10,
//           'sex'        =>  0,
//           'password'   =>  'imooc'
//        ]);
        $userModel = User::get(16);
        $userModel->sex = 1;
        $result = $userModel->save();
        dump($result);
    }
}