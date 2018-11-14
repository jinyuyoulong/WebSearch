<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
         // $result = User::count();
        // $result = User::where('id',">",5)
        // -> count();

        # 最大值
        // $result = User::max('num');

        // $result = User::where('id','<',25)
        // -> max('num');

        # 求和
        // $result = User::sum('num');
        // $result = User::where("id", "<", 24)
        // -> sum('num');

        # 平均值
        // $result = User::avg('num');

        # 最小值
        $result = User::min('num');
         dump($result);
    }
}