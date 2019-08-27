<?php 
include 'connection.php';
$id = (int)$_POST['id'];
$username = $_POST['username'];

echo($id);
echo($_POST['password']);
if (trim($_POST['password'])) {
	// $password = md5(trim($_POST['password']));
	$sql = "update book set username='".$username."' where id =$id";
	echo($sql);
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo('修改成功');
	}else{
		echo('faild');
	}
}else{
	echo('修改成功');
}
mysqli_close($conn);
?>