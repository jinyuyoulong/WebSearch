<?php include 'header.php'?>
<div style="padding:30px;">
	<form action="registAction.php" method="post">
		<label for="name">用户名:</label>
		<input type="text" name="name" class="text-l w-100"><br>

		<label for="password">密  码:</label>
		<input type="password" name="password" class="text-l w-100"><br>

		<input type="radio" name="usertype" value=1>&nbsp;用户<br>
		<input type="radio" name="usertype" value=2>&nbsp;管理员<br>
		<br>
		<input type="submit" value="注册" style="width: 200px">
	</form>
</div>
<?php include 'footer.php'?>