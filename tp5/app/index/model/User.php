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
}