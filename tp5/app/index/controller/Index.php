<?php
namespace app\index\controller;
use think\Config;
use think\Request;

class Index
{
    public function index(Request $request)
    {       
        $response = [
            'code' => 200,
            'result' => [
                'list'=>[1,2,3,4,5]
            ]
        ];

        Config::set('default_return_type','xml');
        return $response;
    }

}