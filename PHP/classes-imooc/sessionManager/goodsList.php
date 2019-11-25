<?php  
$gools = array();
$i = 0;

$conn = mysqli_connect("127.0.0.1","root","333","test");
mysqli_set_charset($conn,"utf8");
$sql = "select * from shop";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result)) {
	while ($row = mysqli_fetch_assoc($result)) {
		$gools[$i]['id'] = $row['id'];
		$gools[$i]['name'] = $row['name'];
		$gools[$i]['price'] = $row['price'];
		$i++;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>goodsList</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
	foreach ($gools as $value) {
		echo "商品名".$value['name']."价格".$value['price'];
		echo "<a href=buy.php?name=".$value['name'].'&price='.$value['price'].">购买</a>";
		echo "<br>";
	}
	?>
	<a href="shopingCart.php" id="href">查看购物车</a>
</body>
</html>