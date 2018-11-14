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
//           'password'   =>  md5('imooc'),
//           'num'        =>  100,
//            'demo'      =>  "demo"
//        ],['username','email']);
        # create 第二个参数 true，排除非数据库字段
        # create 第二个参数 数组，指定需要添加进数据库的字段

//        $userModel = new User;
//        $userModel->username = 'fan';
//        $userModel->email = 'fan@qq.com';
//        $userModel->save();// 私有方法
        $userModel = new User;
//        $userModel->save([
//            'username' => 'fan',
//            'password' => md5('fan')
//        ]);

        # allowField 方法 同上边 create方法第二个参数的作用
//        $userModel->allowField(['username'])->save([
//            'username' => 'fan',
//            'password' => md5('fan'),
//            'demo'=>'demo'
//        ]);

        $result = $userModel->saveAll([
            ['email'=>   "jin@qq.com"],
            ['email' =>  "long@qq.com"]
        ]);

        foreach ($result as $value)
        {
            dump($value->toArray());
        }
//        dump($userModel->id);
//        dump($result);
    }
}