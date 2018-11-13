<?php
namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {

        $this->assign('a',10);
        $this->assign('b',20);
        return $this->fetch();
    }

}