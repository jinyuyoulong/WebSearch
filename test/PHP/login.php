<?php
	// echo json_encode(array ('username'=>$_REQUEST['username'],'password'=>$_REQUEST['password']));
	$arr = [
		'username'=>$_POST['username'],
		'password'=>$_POST['password'],
		// 'getname'=>$_GET['username'],
		// 'getpwd'=>$_GET['password']
	];

	echo json_encode($arr);
?>
