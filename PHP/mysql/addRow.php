<?php  
include 'connection.php';
$sql = "insert into book values(null,'hehe','2312425432',2635544666)";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo($result);
}else{
	echo(mysqli_error());
}
mysqli_close($conn);
?>