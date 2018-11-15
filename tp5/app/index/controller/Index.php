<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
//        $result = User::create([
//           'name'   =>  'fan',
//           'password'   =>  'fanpas'
//        ]);
//        $userModel = User::get(1);
//        $userModel->name = 'fans';
//        $result = $userModel->save();
//        $result = User::destroy(1);// 软删除
//        $result = User::get(1);

//        $result = User::withTrashed(true)->find(1);
//        $result = User::onlyTrashed()->select();

        # 真正的删除，hard删除, 已经软删除的数据不能再被删除
//        $result = User::destroy(2,true);
        $user = User::get(3);
        $result = $user->delete(true);
        dump($result);
    }
}