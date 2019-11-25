<?php
include '../mysql/connection.php';
//第一次登陆的时候，通过用户输入的信息来确认用户
    $userName = $password = "";

if (!empty($_POST['password']) && !empty($_POST['username'])) {
    $password = $_POST['password'];	
    $userName = $_POST['username'];
    echo "username:".$_POST['username']."<br/>";
    echo "password:".$_POST['password']."<br/>";
    // 从db获取用户信息  
    $sql = "select * from user where `username` = '$userName' ";
    echo($sql);
    $res = mysqli_query($conn,$sql);
    if ($res) {
    	print_r($res);
    }else{
    	echo "mysql faild";
    }
    $row = mysqli_fetch_assoc($res);
    print_r($row);
    echo($row);
    if ($row['password'] == $password) {
        //密码验证通过，设置cookies，把用户名和密码保存在客户端
        echo "set cookie";
        $time = time()+60*30;//30秒//设置时效一分钟,一分钟后这个cookie失效
        setcookie('username',$userName,$time);
        setcookie('password',$password,$time);
        //最后跳转到登录后的欢迎页面
        // header('location: welcome.php' . "?username=$userName");
    }else{
    	echo "用户名或密码错误";
    }
}

    

// 再次访问的时候通过cookie来识别用户
if (!empty($_COOKIE['username'])  && !empty($_COOKIE['password'])  ) {
    $userName = $_COOKIE['username'];
    $password = $_COOKIE['password'];
	echo "<br>cookie 。。。。。。。。。<br/>";
	echo "username:".$_POST['username']."<br/>";
	echo "password:".$_POST['password']."<br/>";
    //从db获取用户信息
    //PS：数据库连接信息改成自己的 分别为主机 数据库用户名 密码
	//验证 用户名和密码
    $res = mysqli_query($conn,"select * from user where `username` =  '$userName' ");
    $row = mysqli_fetch_assoc($res);
    if ($row['password'] == $password) {
    	echo "验证通过<br>";
    	echo "username:".$userName."<br/>";
		echo "password:".$password."<br/>";
        //验证通过后跳转到登录后的欢迎页面
        // header('location: welcome.php' . "?username=$userName");
    }else{
    	echo "用户名或密码错误";
    }
}

?>
<html>
<head>

</head>
<body>
    <form action="" method="POST">
        <div>
            用户名：<input type="text" name="username" />
            密  码：<input type="text" name="password" />
            <input type="submit" value="登录">        
        </div>
    </form>
</body>
</html>