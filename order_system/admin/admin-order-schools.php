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

$orderDate = $_GET['orderDate'];

$dbh = FFPDO::init();
$sql = "select * from user_order inner join user on user_order.uid=user.uid where to_days(user_order.create_time)=to_days('$orderDate')";
//echo $sql.'<br>';
// $theOrders = $dbh->query('select * from user right outer join user_order on user.uid=user_order.uid')->fetchAll();//右联
$theOrders = $dbh->query($sql)->fetchAll();//内联
//var_dump($theOrders);
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
            echo "<td><a href='admin-order-detail.php?oId=$id&orderDate=$orderDate'>$name</a> </td>";
            echo '</tr>';
        }

    ?>
</table>
<hr>

<br>
<a href="admin-jinhuodan.php?orderDate=<?php echo $orderDate;?>">单日进货单</a>
<br>
<a href="admin-lihuodan.php?orderDate=<?php echo $orderDate;?>">单日理货单</a>


<?php
include_once 'admin-foot.php';
include_once '../public/footer.php';
?>
