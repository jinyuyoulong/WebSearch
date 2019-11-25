<?php
session_start();
if (isset($_GET['username'])) {
	$user = $_GET['username'];
	echo "get value";
}else if (isset($_SESSION['userName'])) {
	$user = $_SESSION['userName'];
	echo "session value";
}
?>
<html>
<head>

</head>
<body>
    welcome,<?php echo $user;?>
</body>
</html>