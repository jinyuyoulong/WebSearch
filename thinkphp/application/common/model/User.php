<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/9/13
 * Time: 下午3:32
 */

namespace app\common\model;

use think\Model;

//common 不允许URL访问 提供公共模块
class User extends Model
{
    protected $pk = 'uid';

//    public function index()
//    {
//        $user = Db::name('user')->where('uid',1)->findOrFail();
//        $user = Db::name('user')->select();
//        return $user;
//    }

//    public function demo1($id)
//    {
//        return '我是index模块User控制器的demo1方法，$id='.$id;
//    }
}