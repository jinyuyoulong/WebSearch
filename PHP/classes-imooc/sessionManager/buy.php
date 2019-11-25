<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php  
	session_start();
	$name = $_GET['name'];
	$price = $_GET['price'];

	$goods = $_SESSION['goods'];
	if ($name == $goods[$name]['name']) {
		$_SESSION['totalPrice'] += $price;
		$goods[$name]['number']  += 1;
	}else{// first buy
		$goods[$name]['name'] = $name;
		$goods[$name]['price'] = $price;
		$_SESSION['totalPrice'] += $price;
		$goods[$name]['number'] += 1;
	}
	$_SESSION['goods'] = $goods;
	header('location: goodsList.php');// 逻辑执行完后，马上又调回goodsList 首页，看起来就像没有跳转一样
?>
</body>
</html>