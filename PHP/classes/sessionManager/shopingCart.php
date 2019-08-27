<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">		
</head>
<body>
您买了<br>
	<?
	session_start();
	$goods = $_SESSION['goods'];
	foreach ($goods as $value) {
		echo $value['name']."价格:".$value['price']."数量:".$value['number']."<br>";
	}
	echo "总价：".$_SESSION['totalPrice'];
	?>
	<a href="goodsList.php" id="href">返回购物列表</a>

	<?
	echo "<br>";print_r($_SESSION);
	echo "<br> json : ".json_encode($_SESSION);
	?>
</body>
</html>