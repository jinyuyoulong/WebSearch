<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
        # 用于仅更新一些数据的情况
        // $result = User::update([
        //     'id'    =>  '1',
        //     'username'  =>  'fans'
        // ]);

        # 不建议使用，不能拿到是否成功
        # 第二个参数是 where的作用
        // $result = User::update([
        //     'id'    =>  '2',
        //     'username'  =>  'fans'
        // ],['id'=>2 ]);

        // $result = User::update([            
        //     'username'  =>  'fans'
        // ],function ($query)
        // {
        //     $query->where('id','LT', 5);
        // });

        # 返回影响的行数量 推荐使用
        // $result = User::where('id', '<', '6')
        // -> update([
        //     'username' => 'fans'
        // ]);

        // $userModel = User::get(1);
        // $userModel->username = '123';
        // $userModel->email = "123@qq.com";
        // $result = $userModel->save();

        $userModel = new User;
        # 不建议使用，不能拿到是否成功
        // $result = $userModel->save(['email'=>'222@qq.com'],['id'=>10]);
        // $result = $userModel->save(['email'=>'222@qq.com'],function ($query){
        //     $query->where('id', '<', 5);
        // });

        # 批量
        $userModel 
        dump($result);
    }
}