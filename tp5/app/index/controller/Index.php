<?php
namespace app\index\controller;

class Index
{
	public function __construct()
	{
		config('before','beforeAction');
	}
    public function index()
    {
    	config('indexAction','index');
       dump(config());
       
    }

    public function demo()	
    {
    	dump(config());
    }
}