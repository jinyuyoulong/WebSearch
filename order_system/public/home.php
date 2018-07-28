<?php include 'header.php'; 
// session_save_path("/tmp");
// session_start();
// phpinfo();
?>

<div class="container">

    <div class="row"><div class="span3">
            <h4>个人信息</h4>
            <br>
            <?php            
                echo '你好，'.$_SESSION['user'];
            ?>
        </div>

        <hr/>
        <div class="span9 offset-1">
            <h4>管理</h4><br>
            <a class="btn btn-primary" href="create-order.php">下单</a>
            <a class="btn btn-primary" href="user_select_timer.php">统计</a>
            <hr />
            <a class="btn btn-primary" href="logout.php">退出</a>
            <hr/>
           <a class="btn btn-default" href="../FFTools/sqlmanager.php">goto sqlite manager page</a>
       </div>
    </div>


</div>



<?php include_once 'footer.php'; ?>
