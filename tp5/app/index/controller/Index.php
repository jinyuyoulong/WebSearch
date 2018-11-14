<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {

        $result = Db::table('imooc_user')
//            ->where('id',">",10)
            -> field("username, id")
//            ->order("id DESC") //使用group 时order不生效
//            ->limit('3',5)
//                -> page(2,5)//limit((2-1)*5,5)
            -> group("mgroup") //按group不同分组，相同则只返回一条数据
            -> select();

        dump($result);

    }
}