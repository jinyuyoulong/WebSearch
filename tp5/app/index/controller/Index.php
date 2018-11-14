<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\model\User;
use think\Loader;

class Index extends Controller
{
    public function index()
    {

        $result = User::get(1);
//        $result = User::get(function ($query){
//            $query->where("username","eq","imooc_1")
//                ->field('username, email'); // 注意 field只传入了一个参数
//        });

//        $result = User::where('id',2)
//            ->find();

//        dump($result->username);

//        $result = User::all("1,2,3");
//        $result = User::all([1,2,3]);
//        $result = User::all(function ($query){
//            $query->where("id", "<", "5")
//            ->field("username,id");
//        });

//        $result = User::where("id", ">", 15)
//            -> field("id, username")
//            -> limit(3)
//            -> order("id DESC")
//            ->select();
//        foreach ($result as $value)
//        {
//            $result = $value->toArray();
//            dump($result);
//        }

//        $result = User::where("id",10)->value('id');
        $result = User::column("email","id"); //返回数组：id:email 格式

        dump($result);

    }
}