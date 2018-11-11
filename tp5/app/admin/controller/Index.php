<?php
namespace app\admin\controller;

class Index 
{
    public function index()
    {
        dump(config());
        // return 'admin index page action';
    }

    public function test()
    {
    	return 'admin index page test action';
    }
}