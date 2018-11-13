<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $db = Db::name('user');
        
        dump($result);

    }
}