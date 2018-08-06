<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/13
 * Time: 上午11:28
 */
include_once '../public/header.php';
include_once 'admin-head.php';
require_once '../FFTools/db_mysql.php';

$dbh = FFPDO::init();
// $theOrders = $dbh->query('select * from user right outer join user_order on user.uid=user_order.uid')->fetchAll();//右联
$theOrders = $dbh->query('select * from user inner join user_order on user.uid=user_order.uid')->fetchAll();//内联
// $theOrders = $dbh->query('select * from user_order inner join user on user_order.uid=user.uid')->fetchAll();//内联
// foreach ($theOrders as $row ) {
//     echo json_encode($row).'<br>';
// }
// $result = $dbh->query('select school_name, uid from user where user_type=1')->fetchAll();

?>
<table border="1">
	<thead>
		<th>学校</th>

	</thead>
    <?php
        foreach ($theOrders as $item){
            $name = $item['school_name'];
            $id = $item['id'];
            echo '<tr >';
            echo "<td><a href='admin-order-detail.php?oId=$id'>$name</a> </td>";
            echo '</tr>';
        }

    ?>
</table>
<hr>
            <br>
            <a href="admin-lihuodan.php">单日理货单</a>
            <br>
            <a href="admin-jinhuodan.php">单日进货单</a>

<?
include_once 'admin-foot.php';
include_once '../public/footer.php';?>
