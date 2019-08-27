<?php 
include 'connection.php';
if (is_numeric($_GET['id'])) {
	$id = (int)$_GET['id'];	
	echo('user id is '.$id);
}
$sql = "select id,username from book where id =".$id;
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

?>

<form action="update.php" method="post">
	用户名：<input type="text" name="username" value="<?echo($data['username'])?>"><br/>
	密码：<input type="password" name="password" ><br/>
	<input type="hidden" name="id" value="<?echo($data['id'])?>">
	<input type="submit" value="提交">
</form>

<?mysqli_close($conn);?>