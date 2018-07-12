<?php include 'header.php'; ?>

<div style="padding:30px;">
	<form action="loginAction.php" method="post">
<!--        for属性表明label元素和那个元素id绑定-->
		<label for="name">用户名:</label>
		<input type="text" name="account" class="form-signin" id="name"><br>
        <br>
		<label for="password">密  码:</label>
		<input type="password" name="password" class="form-signin" id="password"><br>

		<br><br>
		<input type="submit" value="登录" class="btn">
	</form>
	<a href="register.php" class="button">注册</a>
</div>
<?php
// 	接受error
	if(!empty($_POST['error'])){
		
// 		接受错误编号
		$error=$_POST['error'];
			if($error==1){
				echo "<br/><font color ='red' size='3'>你的用户名或密码错误</font>";
			}
	}
?>
<?php
include 'footer.php';
?>