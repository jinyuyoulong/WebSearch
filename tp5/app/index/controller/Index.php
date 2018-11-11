<?php
namespace app\index\controller;
use think\Config;
use think\Env;

class Index
{
    public function index()
    {       
        return 'index page';
    }

    public function demo()	
    {
    	return 'demo';;
    }

    public function info($id)
    {
        return {$id};
    }
}