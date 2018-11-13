<?php
namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {

        $this->assign('title','index');

        return $this->fetch();
    }

    public function page1()
    {
        $this->assign('title', 'page1');
        return $this->fetch();
    }
}