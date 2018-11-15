<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/11/14
 * Time: 3:02 PM
 */

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class User extends Model
{
    # 为class 引入 文件
    use SoftDelete;

    # 设置单表 自动添加time
    protected $autoWriteTimestamp = true;
    protected $createTime = false;//默认 create_time
    protected $updateTime = 'update_at';//默认 update_time
//    protected $deleteTime = 'delete_at';//默认 delete_time
}