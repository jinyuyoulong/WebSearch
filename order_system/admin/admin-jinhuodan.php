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
//获取单日所有订单
$orderDate = $_GET['orderDate'];

$dbh = FFPDO::init();
$sql = "select * from simple_orders where to_days(simple_orders.create_time)=to_days('$orderDate')";
$theOrders = $dbh->query($sql)->fetchAll();//内联

$allNames = array();
$ids = array();
foreach ($theOrders as $row){
    $name = $row['name'];
    $allNames[$name][] = $row['number'];
    $ids[] = $row['id'];
}

?>
<form method="post">
<table border="1">
			
			<thead>
            <tr>
                <th>名称</th>
                <th>数量</th>
                <th>单位</th>
                <th>单价</th>
            </tr>
			</thead>
    <?php
    foreach ($allNames as $key => $item){
        echo '<tr >';
				echo "<td>$key</td>";
				echo '<td>';
				for ($i = 0; $i<count($item); $i++){
				    if ($i != count($item)-1){
                        echo ' '.$item[$i].' +';
                    }else{
				        echo ' '.$item[$i];
                    }
                }

				echo '</td>';

				echo '<td><input type="text" name="'.$key.'_unit'.'"></td>';
                echo '<td><input type="text" name="'.$key.'_price'.'"></td>';
			echo '</tr>';
    }
    ?>
				
		</table>
		<input type="submit" name="">
</form>
<br>



<!--//本页处理逻辑先放这里，如果以后有post get的冲突，在将下面的code移到单独页面-->
<?php

if (!empty($_POST) ){
//    var_dump( $_POST);
    $updateData = array();
    foreach ($_POST as $key => $value){
        $tmpArr = explode('_',$key);
        $name = $tmpArr[0];
        $updateData[$name][$tmpArr[1]] = $value;
    }

    $ids = implode(',',$ids);

    $tmpSql = "";
    foreach ($updateData as $name => $item){
        $price = $item['price'];
        $tmpSql = $tmpSql." when '$name' then $price ";
    }
    $sql = "update simple_orders set price = case name".$tmpSql;
    $sql = $sql.'end, unit = case name';

    foreach ($updateData as $name => $item){
        $unit = $item['unit'];
        $sql = $sql." when '$name' then '$unit' ";
    }
    $sql = $sql.'end ';
    $sql .= "where id in ($ids)";

    $dbh = FFPDO::init();
    $dbh->setAttribute(FFPDO::ATTR_ERRMODE, FFPDO::ERRMODE_EXCEPTION);
    $dbh->beginTransaction();
    $updateCount =  $dbh->exec($sql);
    if ($updateCount > 0){
        $dbh->commit();
        echo '<script language="javascript">';
        echo 'alert("更新成功");';
        echo "parent.location.href='admin-home.php";
        echo '</script>';
    }else{
        $dbh->rollBack();
        echo '<script language="javascript">';
        echo 'alert("更新失败");';
        echo '</script>';
    }

}

?>
<?php include_once 'admin-foot.php'; include_once '../public/footer.php';?>
