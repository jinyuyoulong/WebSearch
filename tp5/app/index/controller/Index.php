<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
//        $result = Db::query('select * from imooc_user');
//        $result = Db::execute("insert into imooc_user set username=?,password=?,email=?",[
//            'imooc',
//            md5('imooc'),
//            'imooc@qq.com'
//        ]);

        //select 返回所有记录，二维数组
        // 如果结果不存在，返回空数组
        $result = Db::table('imooc_user')->select();

//        find 返回一条数据，一维数组
//        如果结果不存在，NULL
//        $result = Db::table('imooc_user')->where([
//            'id'=>100
//        ])->find();

//        value 返回一条数据，字段的值
//        如果结果不存在，返回 NULL
//        $result = Db::table('imooc_user')->value('username');

        # column 返回一维数组，数组中的value就是需要的值
        # 如果有第二个参数，第二个参数作为key 返回一维数组。第三个参数忽略
        # 如果结果不存在，返回空数组
//        $result = Db::table('imooc_user')->column('email','username','password');

        # name 省略前缀
//        $result = Db::name('user')->select();
        # db 助手函数，每次调用都会实例化，第三个参数控制是否每次实例化
        $result = \db('user')->find();
        $result = \db('user',[],false)->find();

        dump($result);

    }
}