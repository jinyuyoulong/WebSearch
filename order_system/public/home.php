<?php include 'header.php'; ?>

<div class="container">
        <ul class="nav nav-justified">
            <li class="nav-item">个人信息</li>
            <li class="nav-item">管理</li>
        </ul>
    <div class="row"><div class="span3">
            <?php
                echo('你好，'.$_SESSION['user']);
            ?>
        </div>

        <hr/>
        <div class="span8 offset-1">
            <a class="btn btn-primary" href="create-order.php">下单</a>
           <a class="btn btn-primary" href="user_orders.php">统计</a>
            <hr />
            <a class="btn btn-primary" href="login.php">退出</a>
            <hr/>
           <a class="btn btn-default" href="../FFTools/sqlmanager.php">goto sqlite manager page</a>
       </div>
    </div>


</div>



<?php include_once 'footer.php'; ?>
