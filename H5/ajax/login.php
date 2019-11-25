<?
if (!empty($_GET)) {
	$username = $_GET('username');
	$password = $_GET('password');
}

if (!empty($_POST) {
	$username = $_POST('username');
	$password = $_POST('password');
}
$arr['username'] = $username;
$arr['password'] = $password;

echo json_encode($arr);
?>