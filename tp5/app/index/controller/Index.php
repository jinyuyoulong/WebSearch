<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $db = Db::name('user');
        # delete 如果操作主键，可以直接传入主键的值，进行delete
        # where("1=1") where 永远返回 true 会将数据全部删除，不建议使用。
        $result = $db->where("1=1")->delete();

        dump($result);

    }
}