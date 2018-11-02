<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/10/19
 * Time: 下午5:43
 */

namespace app\validate;
use think\validate;

class User extends Validate
{
    protected $rule = [
        'email' => 'email',
    ];

    protected $message = [
        'email' => '邮箱格式错误',
    ];
}