<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/3
 * Time: 下午3:31
 */
include_once '../public/header.php';
include_once  'admin-head.php';

require_once '../FFTools/db_mysql.php';
require_once '../FFTools/ff-tools.php';

//$dbh = FFPDO::init();
//$orderDates = $dbh->query('select create_time,id from simple_orders')->fetchAll();

$now = date('Y-m-d');
?>
<br><br>
    <div class="row">
        <ul class="nav nav-justified">
            <li class="nav-item">个人信息</li>
            <li class="nav-item">管理</li>
        </ul>
        <div class="span3">
            <br>
            <a class="btn btn-primary" href="admin-order-schools.php?orderDate=<?php echo $now?>"><?php echo $now?></a>
            <br>
            <form action="admin-order-schools.php" method="get">
                <label>选择要查看的订单的时间</label><br>

                <input type="date" name="orderDate" value="<?php echo $now?>" max="<?php echo $now ?>"><br>
                <br>
                <input type="submit" class="form-signin-heading" value="查询">
            </form>

            <br>
            <a class="btn btn-primary" href="admin-orders.php">2018.08.12</a>
            <br>
            <a class="btn btn-primary" href="admin-orders.php">2018.08.12</a>

            <hr>
        </div>
        <div class="span8 offset-1">
            <a class="btn btn-primary" href="">用户设置</a><br>
            <br>
            <a class="btn btn-primary" href="admin-add-category.php">找回密码</a>
        </div>

    </div>
<?php
//foreach ($orderDates as $row)
//{
//    $date = FFTools::formateDate(row[0]);
//    echo "<a class='btn btn-primary' href='admin-order-schools.php?id='>$date</a>";
//    echo '<br>';
//}

?>
<?php include_once 'admin-foot.php'; include_once '../public/footer.php'?>

