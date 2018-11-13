<?php
namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {
//        dump($_SERVER);
        session('email','fans@qq.com');
        cookie('name','范金龙');
        return $this->fetch();
    }

}