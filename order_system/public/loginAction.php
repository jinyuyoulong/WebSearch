<?php
require_once('../public/response.php');
require_once('../FFTools/sqlmanager.php');
require_once('../FFTools/db_mysql.php');

$account = $_POST['account'];
$pwd = $_POST['password'];

$messsage = "";
$code = 0;
$arr = array();

// 查表
//$result =  DBUtile::selectRow($account, 'username','user');
$dbh = FFPDO::init();

$result = $dbh->query("select * from user where name = '$account'");

if ($result->rowCount() > 0)
{
    $firstRow = $result->fetchObject();
    if ($firstRow->pwd == md5($pwd)) {
        $_SESSION['user'] = $account;
        $_SESSION['uid'] = $firstRow->uid;

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

