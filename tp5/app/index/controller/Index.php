<?php
namespace app\index\controller;
use think\Config;
use think\Env;

class Index
{
	public function __construct()
	{
		config('before','beforeAction');
	}
    public function index()
    {

       // dump($_ENV['PHP_EMAI']);
        // $res = Env::get('emails', 'ddd'); //没有配置的话，默认配置ddd
        // $res = Env::get('database.host');// ==  Env::get('database_host')
        // dump($res);
       // dump($_ENV);
        dump(config());
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