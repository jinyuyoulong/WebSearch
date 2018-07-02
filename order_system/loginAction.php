<?php


require_once('./response.php');
require_once('./sqlmanager.php');

$account = $_POST['account'];
$pwd = $_POST['password'];

$messsage = "";
$code = 0;
$arr = array();
// 查表
$result = DBUtile::selectRow($account, 'username','user');


if (count($result) > 0)
{
    $firstRow = $result[0];
    if ($firstRow['pwd'] == md5($pwd)) {

        $_SESSION['user'] = trim($account);

        header("Location: home.php");

    }else{
        $messsage = '密码错误';
        echo $messsage."<a href='".$_SERVER["HTTP_REFERER"]."'>返回</a>";
    }
}else{
    $messsage = '用户名错误';
    echo $messsage."<a href='".$_SERVER["HTTP_REFERER"]."'>返回</a>";
}

?>

