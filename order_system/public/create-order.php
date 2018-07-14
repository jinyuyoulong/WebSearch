<?php
require_once 'header.php';
require_once 'head.php';
require_once '../FFTools/sqlmanager.php';

$result = DBUtile::fetchAllRow('vegetable');
$categories = DBUtile::fetchAllRow('categorys');


$response = array();
foreach ($categories as $row){
    $rowItems = array();
    foreach ($result as $item_row){

        if ($row['id']  == $item_row['category']){
            array_push($rowItems, $item_row);

        }
    }
    $row['items'] = $rowItems;
    array_push($response, $row);
}

echo '<form method="get">';
foreach ($response as $row){
    echo "<br>";
    if (count($row['items']) != 0){

        echo "<table border='1'><thead>".$row['name']."</thead><th>菜名</th><th>数量</th>";
        foreach ($row['items'] as $item){
            echo '<tr>';
            echo "<td>".$item['name']."</td><td><input type='text' name='".$item['id']."'</td>";
            echo '</tr>';
        }
        echo "</table>";
    }
    echo "<br>";
}
echo '<input class="form-control" type="submit" value="下单">';
echo '</form>';

//==========================
// get post request data

if (!empty($_GET)) {
    $user_order_paras['uid'] = $_SESSION['uid'];
    $user_order_paras['time'] = time();
    var_dump($user_order_paras);

//    $user_order_result =  DBUtile::insertRowInTable('user_order',$user_order_paras);
    $user_order_result = DBUtile::addOrder($_SESSION['uid']);
    if ($user_order_result){
        var_dump($user_order_result);
    }else{
        echo '创建订单失败!';
    }
//    $paras = array();
//    foreach ($_GET as $vegetableId => $value) {
//        if (!empty($value)) {
//            echo $vegetableId . ':' . $value;
//            echo '<br>';
//            $paras['id'] = $value;
//            $paras['number'] = $value;
//        }
//    }
//    $insert_result = DBUtile::insertRowInTable('vegetables',)

}else{
    echo 'not request';
}
?>


<?  include_once 'foot.php'; include_once 'footer.php';?>

