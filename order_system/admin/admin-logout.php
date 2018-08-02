<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/13
 * Time: 下午4:38
 */
$_SESSION = array();
//if (isset($_COOKIE[session_name()])){
//    setcookie(session_name(), '',time()-3600, '/');
//}
//session_destroy();

header('Location: admin-login.php');
?>