<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $db = Db::name('user');
        # insert 返回值是影响记录的行数 插入数
        # insertGetId 返回自增ID
        # insertAll 批量插入 返回插入数量
        
//        $result = $db->insert([
//           'username' => 'imooc_01',
//           'password'   => md5('imooc_01'),
//            'email' =>  'imooc_01@qq.com'
//        ]);

//        $result = $db->insertGetId([
//            'username' => 'imooc_03',
//            'password'   => md5('imooc_03'),
//            'email' =>  'imooc_03@qq.com'
//        ]);
        $data = [];
        for ($i = 0; $i<10;$i++)
        {
            $data[] = [
                'username' => "imooc_03_{$i}",
            'password'   => md5("imooc_03_{$i}"),
            'email' =>  "imooc_03_{$i}@qq.com"
            ];
        }
        $result = $db->insertAll($data);
        dump($result);

    }
}