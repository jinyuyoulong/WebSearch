<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html,charset=utf8"/>
</head>
<body>
<h1>管理员登陆系统</h1>
<form action="loginProcess.php" method="post">
	<table>
		<tr><td>用户id</td><td><input type="text" name="adminId"/></td></tr>
		<tr><td>密 &nbsp 码</td><td><input type="password" name="password"/></td></tr>
		<tr>
		<td><input type="submit" value="用户登录"/></td>
		<td><input type="reset" value="重新填写"/></td>
		</tr>
	</table>
</form>

<?php
// 	接受error
	if(!empty($_GET['error'])){
		
// 		接受错误编号
		$error=$_GET['error'];
			if($error==1){
				echo "<br/><font color ='red' size='3'>你的用户名或密码错误</font>";
				echo "hehe";
				
			}
	}
?>

<script type="text/javascript" src="">
	
</script>
</body>
</html>
