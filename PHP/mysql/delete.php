<?php
include 'connection.php';
$id = $_GET['id'];
echo('user id is '.$id);
if (isset($_POST['id']) && is_array($_POST['id'])) {
	$id= join(',', $_POST['id']);
}elseif (isset($_GET['id']) && is_numeric($_GET['id'])) {
	$id = $_GET['id'];
}
else{
	echo('数据有误');
	exit;
}

$sql = "delete from book where id in ($id)";
echo($sql.'<br/>');
$result = mysqli_query($conn, $sql);
if ($result) {
	echo('删除成功');
}else{
	echo('删除失败');
}
?>