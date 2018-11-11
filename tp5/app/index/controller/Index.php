<?php
namespace app\index\controller;
use think\Config;
use think\Env;

class Index
{
    public function index()
    {       
        return 'index index page';
    }

    public function demo()	
    {
    	return 'demo';
    }

    public function info($id)
    {
        // echo url('index/index/index', ["id"=>10])."<br>";
        echo url('index/index/info', ["id"=>10])."<br>";

        return "{$id}";
    }
}