<?php
namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {
        $this->assign('email','fans@qq.com');
        $this->assign('time',time());
        $this->assign('user','fas');
        $this->assign('a',10);
        $this->assign('b',20);
        $this->assign('c',30);
        return $this->fetch();
    }

}