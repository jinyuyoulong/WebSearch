<?php


require_once('../public/response.php');
require_once('../FFTools/sqlmanager.php');
require_once '../FFTools/db-sqlite.php';

$account = $_POST['account'];
$pwd = $_POST['password'];

$messsage = "";
$code = 0;
$arr = array();
//$db = new sqlite('../FFTools/SchoolOrders.db');
//$result = $db->select('user','*', ['username'=>$account]);

// 查表
$result = DBUtile::selectRow($account, 'username','user');


if (count($result) > 0)
{
    $firstRow = $result[0];
    if ($firstRow['pwd'] == md5($pwd)) {

        $_SESSION['user'] = trim($account);
        $_SESSION['uid'] = trim($firstRow['uid']);
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

