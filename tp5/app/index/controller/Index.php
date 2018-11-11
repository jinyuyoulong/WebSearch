<?php
namespace app\index\controller;
use think\Config;

class Index
{
	public function __construct()
	{
		config('before','beforeAction');
	}
    public function index()
    {
    	// $res =  Config::get(); //建议此用法
    	// $res = config();

    	$res = Config::get('app_namespace');
       dump($res);
       
    }

    public function demo()	
    {
    	dump(config());
    }
}