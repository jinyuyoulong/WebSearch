<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/13
 * Time: 上午11:16
 */
include_once 'header.php';
require_once '../FFTools/db_mysql.php';

$timeArr = array();

echo '<div class="container">';
echo '<table border="1">';
        echo '<tr>';
            echo '<th>时间</th>';
        echo '</tr>';

$dbh = FFPDO::init();
foreach ($dbh->query('select * from user_order')->fetchAll() as $row){
    $timeArr[] = $row;
    
    $datetime = strtotime($row['create_time']);
    $datetime = date('Y-m-d',$datetime);
    $orderId = $row['id'];
        echo '<tr >';
            $dd = sprintf('<td><a href="user_order_detail.php?oId=%d">%s</a> </td>',$orderId,$datetime);
            echo $dd;
//            echo '<td><a href="user_order_detail.php">$row["create_time"]</a> </td>';
        echo '</tr>';

}
    echo '</table>';
    echo '<a href="user_group_time_orders.php">导出单位时间账单</a>';
echo '</div>';
?>


<?php include_once 'footer.php'?>