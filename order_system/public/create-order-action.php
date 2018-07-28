<?php
require_once '../FFTools/sqlmanager.php';
require_once '../FFTools/db_mysql.php';

$childCount = count($_POST['child_name']);
$childArr = array();
$adultArr = array();
$dataArr = array();
if ($childCount > 0){
    for ($i=0; $i < count($_POST['child_name']); $i++){
        $name = $_POST['child_name'][$i];
        $number = $_POST['child_number'][$i];
        $unit = $_POST['child_unit'][$i];
        $subArrItem['name'] = $name;
        $subArrItem['number'] = $number;
        $subArrItem['unit'] = $unit;
        $subArrItem['order_type'] = 0;

        if (empty($name)){
            continue;//去除无效数据
        }else{
            $dataArr[] = $subArrItem;
            array_push($childArr,$subArrItem);

//            // 第一种方式
//            $childArr[$i]['name'] = $name;
//            $childArr[$i]['number'] = $number;
//            $childArr[$i]['unit'] = $unit;
        }


        // 第二种方式
//        $childArr[] = $subArrItem;

        // 第三种方式，差评！
        //竟然需要两个参数, 不直观
//        array_push($childArr,$subArrItem);


//        echo $_POST['child_name'][$i].":".$_POST['child_number'][$i].":".$_POST['child_unit'][$i];
//        echo '<br>';
    }
}else{
    echo '无数据，请填写数据在提交';
    echo '<a href="'.$_SERVER[HTTP_REDIRECT].'">返回</a>';
}

$adultCount = count($_POST['adult_name']);
if ($adultCount > 0){
    for ($i=0; $i < count($_POST['adult_name']); $i++){
        $name = $_POST['adult_name'][$i];
        $subArrItem['name'] = $name;
        $subArrItem['number'] = $_POST['adult_number'][$i];
        $subArrItem['unit'] = $_POST['adult_unit'][$i];
        $subArrItem['order_type'] = 1;
        if (empty($name)){
            continue;
        }else{
            $dataArr[] = $subArrItem;
            array_push($adultArr,$subArrItem);
        }
    }
}


/*
 * 数据库操作
 * 1. 创建订单
 * 2. 子表插入
 * */
//
//if (count($childArr) > 0){
//    $order_type = 0;
//    createOrderAndInsert($order_type,$childArr);
//}
//
//if (count($adultArr) > 0){
//    $order_type = 1;
//    createOrderAndInsert($order_type, $adultArr);
//}
if (count($dataArr) > 0)
{
   // echo json_encode($dataArr);
    createOrderAndInsert($dataArr);
}

function createOrderAndInsert( $dataArr)
{
    // 创建订单

    $createChildOrderSQL =  "insert into user_order (uid) values (".$_SESSION['uid'].")";
    try{
        $dbh = FFPDO::init();
        $dbh->setAttribute(FFPDO::ATTR_ERRMODE, FFPDO::ERRMODE_EXCEPTION);//设置pdo属性，抛出error
        $dbh->beginTransaction();

        $dbh->exec($createChildOrderSQL);
        $lastOrderId = $dbh->lastInsertId();

        if (!$lastOrderId){
            echo '订单创建失败!';
            $dbh->rollBack();
//        exit();
        }else{
            foreach ($dataArr as $subItem){
                insertOrderInfo($dbh,$lastOrderId, $subItem );
            }
            $dbh->commit();
            echo '下单成功<br>';
            echo '<a href="home.php" class="btn">返回</a>';
        }
    }catch (PDOException $e){
        $dbh->rollBack();
        echo 'Error: '.$e->getMessage();
    }
}
function insertOrderInfo($dbh, $lastOrderId, $subItem){
    $name = $subItem['name'];
    $number = $subItem['number'];
    $unit = $subItem['unit'];
    $order_type = $subItem['order_type'];

    $createOrderInfoSQL = "insert into simple_orders(orderId,name ,number ,unit, order_type) values ($lastOrderId, '$name' ,$number,'$unit', '$order_type')";
    $dbh->exec($createOrderInfoSQL);
}
?>