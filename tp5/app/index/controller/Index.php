<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
        $result = User::get(3);
        echo $result->sex;
        dump($result->toArray());
        dump($result->getData());
    }
}