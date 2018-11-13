<?php
namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {
        $list = [
            'user1' => [
                'name' => 'fan',
                'email'=> 'fan@qq.com'
                ],
            'user2' =>[
              'name'    =>  'jin',
              'email'   =>  'jin@qq.com'
            ],
            'user3' => [
                'name'  =>  'long',
                'email' =>  'long@qq.com'
            ]
        ];
//        $list = [];
//        $empty = "<h1>这里分配为空</h1>";
//        $this->assign('empty',$empty);
        $this->assign('list',$list);
        return $this->fetch();
    }

}