<?php
namespace app\index\controller;

use think\Controller;
use app\common\model\User;


class IndexController extends Controller
{
    public function index()
    {
//        ini_set("display_errors","On");
//        error_reporting(E_ALL);

//        $sql = 'select * from user where user_name="fan"';
//        $data = Db::connect('db_config3')->query($sql);

//        $data = Db::connect('mysql://root:333@127.0.0.1:3306/SchoolOrders#utf8')->query('select * from user where uid=1');
//        $data = Db::name('user')->where('uid',1)->findOrFail();

//        echo $sql;

//        $user = new User;
//        dump($user);
//        echo 'haha';
//        return "查询结果：fan<br/>".dump(Db::name('user')->find());
        echo "echo index";
        return $this->fetch();
    }

    public function demo()
    {
        return 'demo page';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . '$name';
    }

}
