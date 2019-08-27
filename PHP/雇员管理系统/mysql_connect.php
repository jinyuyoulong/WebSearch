<?
$servername = "127.0.0.1";
$username = "root";
$password = "333";
$con = mysqli_connect($servername,$username,$password,'login');
if(!$con){
	die('not connect: '. mysqli_connect_error());
}else{
	echo "connect success";
}
mysqli_close($con);