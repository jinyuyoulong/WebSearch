<?php include 'header.php' ?>
<div style="padding:30px;">
	<form action="" method="post">
		<label for="name">用户名:</label>
		<input type="text" name="name" class="text-l w-100" placeholder=""><br>

		<label for="password">密  码:</label>
		<input type="password" name="password" class="text-l w-100" placeholder=""><br>
        <label>学校名称:</label>
        <input type="text" name="schoolName" class="text-l w-100" placeholder="">

		<input type="radio" name="userType" value=1 placeholder="">&nbsp;用户<br>
		<input type="radio" name="userType" value=2 placeholder="">&nbsp;管理员<br>
		<br>
		<input type="submit" value="注册" style="width: 200px">
	</form>
</div>
<?php include 'footer.php' ?>

<?php

require_once('../FFTools/db_mysql.php');

$name = $_POST['name'];
$password = md5($_POST['password']);
$userType = $_POST['userType'];
$schoolName = $_POST['schoolName'];

if (!empty($_POST)){
    if (trim($name) != "" and
        trim($password) != "" and
        trim($userType) != "")
    {
        $dbh = FFPDO::init();
        $sql = "insert into user(name,pwd,user_type,school_name) values ('$name', '$password', $userType, '$schoolName')";
        $result = $dbh->exec($sql);

//    echo $sql;
//    var_dump($result);
        if ($result){
            echo "添加成功!<a href='".$_SERVER["HTTP_REFERER"]."'>返回</a>";
        }else{
            echo "用户名已存在!";
        }

    }else{
        echo('请填写完整信息');
    }
}

?>
