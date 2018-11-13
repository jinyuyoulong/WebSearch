<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $db = Db::name('user');
        # update 返回影响的行数量
//        $result = $db->where([
//            'id'=>2
//        ])->update([
//           'username' => 'fan',
//            'email' => 'fan@qq.com'
//        ]);

        # setField 每次只更新一个字段，返回影响的行数量
//        $result = $db->where(['id'=>3])->setField('username','jin');

        # setInc    字段自增，默认自增1，返回影响的行数量
//        $result = $db->where([
//            'id'=>1,
//        ])->setInc('num',5);

        # setDec 自减
        $result = $db->where([
            'id'=>1
        ])->setDec('num',5);

        dump($result);

    }
}