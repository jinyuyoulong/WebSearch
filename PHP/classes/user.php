<?
include 'version.php';
if(!defined('AUTH')) {
	echo('警告，不能绕过授权文件');
	exit();
}
echo "login";
?>