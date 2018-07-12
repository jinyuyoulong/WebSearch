<?php

require_once('sqlmanager.php');
$name = $_POST['name'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];

if (trim($name) != "" and
    trim($password) != "" and
    trim($usertype) != "")
{
    $tablename = 'user';
    $column_name = 'username';
    $result = DBUtile::selectRow($name, $column_name, $tablename);

    var_dump($result);

    if (count($result) != 0){
        echo "用户名已存在!<a href='".$_SERVER["HTTP_REFERER"]."'>返回</a>";
    }else{

        $password = md5($password);
        echo('password:'.$password);

	    $result = DBUtile::insertUser($name, $password, $usertype);
        if ($result)
        {
            echo "添加成功!<a href='".$_SERVER["HTTP_REFERER"]."'>返回</a>";
        }else{
            echo('注册失败');
        }
    }

}else{
    echo('请填写完整信息');
}

?>