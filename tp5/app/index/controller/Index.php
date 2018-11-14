<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
        // $result = User::destroy(1);
        // $result = User::destroy(['id',2]);
        // $result = User::destroy(function($query){
        //     $query->where("id","<","5");
        // });

        // $userModel = User::get(6);
        // $result = $userModel->delete();

       // $result = User::where('id',"=","5")
        // $result = User::where('id',"<","10")

        $result = User::where("1=1")// 删除所有数据 1=1 恒等于1
        ->delete();

        dump($result);
    }
}