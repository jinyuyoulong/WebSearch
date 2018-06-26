<?php
require_once('sqlmanager.php');
$name = $_POST['name'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];

if(trim($name) != "")
{
    $result = DBUtile::selectRow($name, 'user');
    if ($result.count() == 0){
        echo "用户名已存在";
    }
}
if (trim($name) != "" and 
	trim($password) != "" and
	trim($usertype) != "") 
{
	$password = md5($password);
	DBUtile::insertUser($name, $password, $usertype);
	exit();

}else{
	echo('请填写完整信息');
}
?>