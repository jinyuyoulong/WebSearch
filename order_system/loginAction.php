<?php
import 'head.php'
require_once('./response.php');
require_once('./sqlmanager.php');

$account = $_POST['account'];
$pwd = $_POST['password'];

// 查表
// $result = DBUtile::fetchUser(1);


$messsage = "";
if ($result['pwd'] == $pwd) {
	$arr = array(
	'id' =>1 ,
	'name' => $account,
	'pwd' => $pwd,
	);
}else{
	$arr = [];
	$messsage = '密码错误';
}

$code = 200;

if ($code != 200) {
	Response::error($code, $messsage);
}else{
	Response::show($code,$messsage,$arr,'array');
}