<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $db = Db::name('user');

        # where(['id'=> 1])
        # where("id=1")
        # where("id",1)
        # where('id','<>',1) id不等于1，参数：字段，表达式，值

        # 表达式   不区分大小写，
        # EQ    =
        # NEQ   <>
        # LT    <
        # ELT   <=
        # RT    >
        # ELT   >=
        # BETWEEN   BETWEEN * AND *
        # NOTBETWEEN    NOTBETWEEN * AND *
        # IN    IN (*,*)
        # NOTIN NOT IN (*,*)

        # 写法    建议使用三个参数的方式，两个的话建议使用数组的方式
        
//        $sql = $db->where('id','between',"1,5")->buildSql();

//        $sql = $db->where([
//            'id'=> ['in',[1,3,5]],
//            'username' => 'fans'
//        ])->buildSql();

//        $sql = $db->where('id','EXP',"NOT in (1,2,3)")
//            ->buildSql();

        $sql = $db->where('id','in', '1,2,3')
            ->where('username',"eq","fan")
            ->whereOr('email','eq','fan@qq.com')
            ->buildSql();

        dump($sql);

    }
}