<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/13
 * Time: 上午11:30
 */
include_once '../public/header.php';
include_once 'admin-head.php';
require_once '../FFTools/db_mysql.php';
$orderId = $_GET['oId'];

$dbh = FFPDO::init();
$sql = 'select * from simple_orders where orderId='.$dbh->quote($orderId);

$childOrders = array();
$adultOrders = array();

foreach ($dbh->query($sql)->fetchAll() as $row){

    if ($row['order_type'] == 0){
        $childOrders[] = $row;
    }else{
        $adultOrders[] = $row;
    }
}

makeChildTable($childOrders);
echo '<br>';
makeAdultTable($adultOrders);

//==================== fuction ==========================
function makeChildTable($childOrders){
    $orderTotal = 0;

    echo '<table border="1" class="table table-condensed">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>名称</th><th>数量</th><th>单位</th><th>单价</th><th>合计</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($childOrders as $row){
//        $datetime = strtotime($row['create_time']);
//        $datetime = date('Y-m-d',$datetime);

        $name = $row['name'];
        $number = $row['number'];
        $unit = $row['unit'];
        if (empty($row['price'])){
            $price = '暂无';
            $productTotalPrice = '暂无';
        }else{
            $price = $row['price'];
            $productTotalPrice = $number * $price;
            $orderTotal = $orderTotal + $productTotalPrice;
        }

        echo '<tr >';
        echo '<td>'.$name.'</td>';
        echo "<td>".$number."</td>";
        echo "<td>".$unit."</td>";
        echo "<td>".$price."</td>";
        echo "<td>".$productTotalPrice."</td>";
        echo '</tr>';
    }

    echo '</tbody>';

    echo '<caption>儿童菜单 合计：'.$orderTotal.'</caption>';

    echo '</table>';
}

function makeAdultTable($adultOrders){
    $orderTotal = 0;

    echo '<table border="1" class="table">';
    echo '<tr>';
    echo '<th>名称</th><th>数量</th><th>单位</th><th>单价</th><th>合计</th>';
    echo '</tr>';

    foreach ($adultOrders as $row) {
        $name = $row['name'];
        $number = $row['number'];
        $unit = $row['unit'];
        if (empty($row['price'])){
            $price = '暂无';
            $productTotalPrice = '暂无';
        }else{
            $price = $row['price'];
            $productTotalPrice = $number * $price;
            $orderTotal = $orderTotal + $productTotalPrice;

        }

        echo '<tr >';
        echo '<td>'.$name.'</td>';
        echo "<td>".$number."</td>";
        echo "<td>".$unit."</td>";
        echo "<td>".$price."</td>";
        echo "<td>".$productTotalPrice."</td>";
        echo '</tr>';
    }
    echo '<caption>成人菜单 合计：'.$orderTotal.'</caption>';

    echo '</table>';

}

?>
<table border="1">
            儿童
            <thead>
                <th>名称</th>
                <th>数量</th>
                <th>单位</th>
                <th>单价</th>
            </thead>
            <tr >
                <td>白菜</td>
                <td>2</td>
                <td>斤</td>
                <td><input type="text" name=""></td>

            </tr>
            <tr >
                <td>白菜</td>
                <td>2</td>
                <td>斤</td>
                <td><input type="text" name=""></td>
            </tr>
            <tr >
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
        </table>
        <a href="">添加一行</a>
<br>
<table border="1">
            成人
            <thead>
                <th>名称</th>
                <th>数量</th>
                <th>单位</th>
                <th>单价</th>
            </thead>
            <tr >
                <td>白菜</td>
                <td>2</td>
                <td>斤</td>
                <td>1.3</td>
            </tr>
            <tr >
                <td>白菜</td>
                <td>2</td>
                <td>斤</td>
                <td>1.3</td>
            </tr>   
        </table>

<? include_once 'admin-foot.php';include_once '../public/footer.php'; ?>
