<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/13
 * Time: 上午11:18
 */

include_once 'header.php';
include_once 'head.php';
include_once '../FFTools/db_mysql.php';
include_once '../FFTools/ff-tools.php';

// 选择单位时间段内的订单

$startTime = $_GET['startDate'];
$endTime = $_GET['endDate'];
$childOrders = array();
$adultOrders = array();

$dbh = FFPDO::init();
$sql = "select * from simple_orders where create_time between '$startTime' and '$endTime'";

$result = $dbh->query($sql);

foreach ($result->fetchAll() as $item){
    $order_type = $item['order_type'];
    $orderId = $item['orderId'];
    if ($order_type == 0){
        $childOrders[$orderId]['list'][] = $item;
        $childOrders[$orderId]['orderDate'] = FFTools::formateDate($item['create_time']) ;
    }else{
        $adultOrders[$orderId]['list'][] = $item;
        $adultOrders[$orderId]['orderDate'] = FFTools::formateDate($item['create_time']) ;
    }
}
//echo var_dump($childOrders).'<br>';
//echo json_encode($adultOrders);
?>
<div class="container">
	<table border="1">
		<caption>儿童</caption>

		<thead>
            <tr>
                <th>名称</th>
                <th>数量</th>
                <th>单位</th>
                <th>单价</th>
            </tr>
		</thead>
<?php

foreach ($childOrders as $orders){
    $date = $orders['orderDate'];
    echo "<th colspan='4'>$date</th>";
    foreach ($orders['list'] as $item){

        echo '<tr >';
			echo "<td>".$item['name']."</td>";
			echo "<td>".$item['number']."</td>";
			echo "<td>".$item['unit']."</td>";
			echo "<td>".$item['price']."</td>";
		echo "</tr>";

    }

}
?>
</table>
<br>
<table border="1">
	<caption>成人</caption> 
	<thead>
        <tr>
            <th>名称</th>
            <th>数量</th>
            <th>单位</th>
            <th>单价</th>
        </tr>
	</thead>
    <?php

    foreach ($adultOrders as $orders){
        $date = $orders['orderDate'];
        echo "<th colspan='4'>$date</th>";
        foreach ($orders['list'] as $item){

            echo '<tr >';
            echo "<td>".$item['name']."</td>";
            echo "<td>".$item['number']."</td>";
            echo "<td>".$item['unit']."</td>";
            echo "<td>".$item['price']."</td>";
            echo "</tr>";

        }

    }
    ?>
</table>
		<a href="" class="btn">导出</a>
</div>
<?php include_once 'footer.php'?>

