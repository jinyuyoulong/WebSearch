<?
include 'connection.php';
if(!$conn){
	die('not connect: '. mysqli_error());
}else{
	echo('connect sucessed');
}
$sql = "alter table book change name username char";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// echo('<br>'.$row['password']);
mysqli_close($conn);

?>