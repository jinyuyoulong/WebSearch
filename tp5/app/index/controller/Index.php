<?php
namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {       
        // 默认模板地址
        // /app/index/view/index/index.html
        // /app/当前模块名/view/当前控制器名/当前方法名.html
        // 传递第一个参数，找到upload.html
//        return view('upload');

//        有反斜杠代表view下的两级目录路径
//        /app/index/view/public/upload.html
//        return view('public/upload');

        // ./ 代表public下，index.php 同级的路径
//        return view('./index.html');
//        return view('./html/123.html');

//        第二个参数输出变量，使用{$email}获取变量
//        第三个参数直接替换大写变量,用例： <p>STATIC</p>
//        return view('index', [
//           'email'=>'fans@qq.com'
//        ],
//            [
//                'STATIC'=>'这是static文字'
//            ]);

//        $this->assign('user','jin');

//        return $this->fetch('index',[
//            'email'=> 'fans@qq.com'
//        ],
//            [
//            'STATIC' => '这是static文字'
//        ]);

//        display比较好维护，通常使用这个方法
        $this->assign('user','jin');
        return $this->display('这是一个{$email} {$user}字符串',[
            'email'=>'fan@qq.com'
        ]);
    }

}