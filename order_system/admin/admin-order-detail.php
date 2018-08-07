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
$orderTime = $_GET['orderDate'];

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
echo "<form method='post' action=''>";
makeChildTable($childOrders);
echo '<br>';
makeAdultTable($adultOrders);
echo "<input type='submit' value='添加价格'>";
echo "</form>";

//==================== fuction ==========================
function makeChildTable($childOrders){
    $orderTotal = 0;

    echo '<table border="1" class="table table-condensed">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>名称</th><th>数量</th><th>单位</th><th>单价</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($childOrders as $row){
//        $datetime = strtotime($row['create_time']);
//        $datetime = date('Y-m-d',$datetime);

        $name = $row['name'];
        $number = $row['number'];
        $unit = $row['unit'];
        $orderInfoId = $row['id'];
        $orderInfoPriceKey = $orderInfoId.'_price';

        if (empty($row['price'])){
            $price = '';
        }else{
            $price = $row['price'];
          }

        echo '<tr >';
        echo '<td>'.$name.'</td>';
        echo "<td>".$number."</td>";
        echo "<td>".$unit."</td>";
        echo "<td>"."<input type='text' name='$orderInfoPriceKey' value='$price'>"."</td>";
        echo '</tr>';
    }

    echo '</tbody>';

    echo '<caption>儿童菜单 </caption>';

    echo '</table>';
}

function makeAdultTable($adultOrders){
    $orderTotal = 0;

    echo '<table border="1" class="table">';
    echo '<tr>';
    echo '<th>名称</th><th>数量</th><th>单位</th><th>单价</th>';
    echo '</tr>';

    foreach ($adultOrders as $row) {
        $name = $row['name'];
        $number = $row['number'];
        $unit = $row['unit'];
        $orderInfoId = $row['id'];
        $orderInfoPriceKey = $orderInfoId.'_price';
        if (empty($row['price'])){
            $price = '';
        }else{
            $price = $row['price'];
        }

        echo '<tr >';
        echo '<td>'.$name.'</td>';
        echo "<td>".$number."</td>";
        echo "<td>".$unit."</td>";
        echo "<td>"."<input type='text' name='$orderInfoPriceKey' value='$price'>"."</td>";
        echo '</tr>';
    }
    echo '<caption>成人菜单</caption>';

    echo '</table>';

}
?>

<? include_once 'admin-foot.php';include_once '../public/footer.php'; ?>

<?php
require_once '../FFTools/db_mysql.php';
require_once '../FFTools/ff-tools.php';

if (!empty($_POST)){
    $priceArr = array();

    foreach ($_POST as $key => $value) {
        $tempArr = explode('_',$key);

        if ($tempArr[1] == 'price') {
            $id = $tempArr[0];
            // echo $id.' ';
            $priceArr[$id] = $value;
            $ids[] = $id;
        }
    }

    $subSql = "";
    foreach ($priceArr as $key => $value) {

        $tempStr = " when ".$key." then ".$value." ";
        $subSql = $subSql.$tempStr;
    }


    $sql = "update simple_orders set price = case id".$subSql;


    $ids = implode(',',$ids);
    $sql = $sql." else price end where id in ($ids)";

    $dbh = FFPDO::init();
    $dbh->setAttribute(FFPDO::ATTR_ERRMODE, FFPDO::ERRMODE_EXCEPTION);
    $dbh->beginTransaction();
    $count = $dbh->exec($sql);
    if ($count > 0){
        $dbh->commit();
        $url = 'admin-order-schools.php?';
        FFTools::tostUI('更新成功','admin-order-schools.php');
        echo '<script language="javascript">';
        echo 'alert("更新成功")';
        echo '</script>';
//
//        echo '更新成功'.'<br>';
////     echo '<a href="admin-order-schools.php?orderDate=">返回</a>';
//        echo '<a href='.'".$_SERVER["HTTP_REFERER"]."'.'></a>';
    }else{
        $dbh->rollBack();
        FFTools::tostUI('没有需要更新的数据',$_SERVER["HTTP_REFERER"]);
//        echo '<script language="javascript">';
//        echo 'alert("message successfully sent")';
//        echo '</script>';
//        echo '没有需要更新的数据'.'<br>';
////     echo '<a href="admin-home.php">返回</a>';
//        echo $messsage."<a href='".$_SERVER["HTTP_REFERER"]."'>返回</a>";
    }
}



?>