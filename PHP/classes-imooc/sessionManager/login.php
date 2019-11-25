<?
include '../mysql/connection.php';
session_start();
if (!empty($_POST['username']) && !empty($_POST['password'])) {
	$userName = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select * from user where username = '$userName' ";
	echo($sql."<br>");
	$res = mysqli_query($conn, $sql);
	// print_r($res);
	if ($res) {
		$row = mysqli_fetch_assoc($res);
		print_r($row);
	}else{
		echo "find fail";
	}
	echo '<br>password:'.$row['password'];
	if ($row['password'] == $password) {
		echo('_SESSION start');
		$_SESSION['userName'] = $userName;
		$_SESSION['password'] = $password;
		header('Location: welcome.php');
	}else{
		echo "mysql password faild<br>";
		echo "username:".$userName."<br>";
		echo "password:".$password."<br>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<div>
			用户名：<input type="text" name="username" />
			密  码：<input type="text" name="password" />
			<input type="submit" value="登录">		
		</div>
	</form>
</body>
</html>