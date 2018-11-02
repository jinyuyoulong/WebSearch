<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/10/12
 * Time: 下午4:57
 */

namespace app\index\controller;

use think\Controller;
use app\common\model\User;
use app\validate\User as userVali;


class UserController extends Controller
{
    public function index()
    {
        echo 'i am user page';
        $data = [
            'name'  => 'thinkphp',
            'email' => 'thinkphp@qq.com',
        ];

        $validate = new User;
        $result = $validate->ch
        var_dump($result);



//        $user = User::where('user_name','fan')->find();

//        $User = new User;
//        $users = $User->select();
//        $user = $users[0];
//
////
////        echo $user->user_name . '<br>';
//        $this->assign('username',$user);
        return $this->fetch();
    }

    public function create()
    {

        $postData = $this->request->post();

        // 新建测试数据
        // 引用teacher数据表对应的模型
        // 向teacher表中插入数据并判断是否插入成功
//        在完成一个功能之前，或是我们在编码之前，做的事情，先是要写注释，把整个流程以注释的形式非常清楚的摆在眼前，然后再进行编码

        // 新建测试数据
        $user = new User;
        $user->user_name = $postData['name'];
        $user->pwd = $postData['password'];
        $user->user_type = $postData['userType'];
        $user->school_name = $postData['schoolName'];
        $user->email = $postData['email'];

        if (trim($user->user_name) != "" and
            trim($user->pwd) != "" and
            trim($user->user_type) != "")
        {
            $user->pwd = md5($user->pwd);
            $validate = new User;

            $result =  $validate->check($user);
            if ($result){
                return "添加成功!<a href=\'".$_SERVER["HTTP_REFERER"]."\'>返回</a>";
            }else{
                return 'add failed!';
            }

        }else{
            return '数据填写有误！';
        }



//        $user = array(); // 这种写法也可以 $teacher = [];
//        $user['user_name'] = '王五';
//        $user['pwd'] = '333';
//        $user['user_type'] = '1';
//        $user['school_name'] = 'tp幼儿园';
//
//        $User = new User;
//        $state = $User->data($user)->save();
//        return $user['user_name'].'成功添加！';
    }

    public function add()
    {
        $htmls = $this->fetch();
        return $htmls;
    }

}