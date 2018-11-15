<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/11/14
 * Time: 3:02 PM
 */

namespace app\index\model;
use think\Model;

class User extends Model
{
    # 自动完成 配置完字段+setter function
    protected $auto = [
      'time'
    ];

    # 插入执行
    protected $insert = [
      'time_insert'
    ];
    # update 执行
    protected $update = [
      'time_update'
    ];
    # 命名 imooc_user  ->     User.php    User
    # imooc_user_info ->    UserInfo.php  UserInfo

    public function getSexAttr($value)
    {
        switch ($value){
            case "1":
                return "男";
                break;
            case "0":
                return "女";
                break;
            default:
                return "未知";
                break;
        }
    }

//    public function setPasswordAttr($value)
    public function setPasswordAttr($value,$data)
    {
        return md5($value);
//        return $value."_".$data['email'];
    }

    public function setTimeAttr()
    {
        return time();
    }

    public function setTimeInsertAttr()
    {
        return time();
    }

    public function setTimeUpdateAttr()
    {
        return time();
    }
}