<?php
require_once '../FFTools/sqlmanager.php';
require_once '../FFTools/db_mysql.php';

$childCount = count($_POST['child_name']);
$childArr = array();
$adultArr = array();

if ($childCount > 0){
    for ($i=0; $i < count($_POST['child_name']); $i++){
        $name = $_POST['child_name'][$i];
        $number = $_POST['child_number'][$i];
        $unit = $_POST['child_unit'][$i];
        $subArrItem['name'] = $name;
        $subArrItem['number'] = $number;
        $subArrItem['unit'] = $unit;

        if (empty($name)){
            continue;//去除无效数据
        }else{
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

        if (empty($name)){
            continue;
        }else{
            array_push($adultArr,$subArrItem);
        }
    }
}

/*
 * 数据库操作
 * 1. 创建订单
 * 2. 子表插入
 * */
if (count($childArr) > 0){
    $order_type = 0;
    createOrderAndInsert($order_type,$childArr);
}

if (count($adultArr) > 0){
    $order_type = 1;
    createOrderAndInsert($order_type, $adultArr);
}

function createOrderAndInsert($order_type = 0, $dataArr)
{
    // 创建订单

    $createChildOrderSQL =  "insert into user_order (uid, order_type) values (".$_SESSION['uid'].",$order_type)";
    try{
        $dbh = FFPDO::init();
        $dbh->setAttribute(FFPDO::ATTR_ERRMODE, FFPDO::ERRMODE_EXCEPTION);
        $dbh->beginTransaction();

        $dbh->exec($createChildOrderSQL);
        $lastOrderId = $dbh->lastInsertId();

        if (!$lastOrderId){
            echo '订单创建失败!';
            $dbh->rollBack();
//        exit();
        }else{
            foreach ($dataArr as $subItem){
                $name = $subItem['name'];
                $number = $subItem['number'];
                $unit = $subItem['unit'];
                $createOrderInfoSQL = "insert into simple_orders(orderId,name ,number ,unit) values ($lastOrderId, '$name' ,$number,'$unit')";
                $dbh->exec($createOrderInfoSQL);
            }
            $dbh->commit();
            if ($order_type == 0){
                echo '儿童单 下单成功<br>';
            }else if ($order_type == 1){
                echo '成人单 下单成功<br>';
            }
            echo '<a href="home.php" class="btn">返回</a>';
        }
    }catch (PDOException $e){
        $dbh->rollBack();
        echo 'Error: '.$e->getMessage();
    }
}



// $sql = 'SELECT * FROM VEGETABLE LEFT OUTER JOIN CATEGORYS WHERE VEGETABLE.CATEGORY=CATEGORYS.ID';
// $sqlite = new MyDB();

// $result = $sqlite->query($sql);
// $categories = array();
// $sqlResult = array();
// while ($row = $result->fetchArray(SQLITE3_ASSOC)){

// //    var_dump($row);
// //    $categories[$row['cname']] = $row;
//     $crow['cid'] = $row['category'];
//     $crow['name'] = $row['cname'];
//     $categories[$row['cname']] = $crow;

//     array_push( $sqlResult,$row);
// }

// $categorie_keys = array_keys($categories);
// $response = array();
// foreach ($categorie_keys as $cname){
//     $citems = array();
//     foreach ($sqlResult as $row){

//         if ($row['cname'] == $cname) {
//             array_push($citems, $row);
//         }
//     }
//     $response[$cname] = $citems;
// }
// //echo json_encode($response);
// //var_dump($response);
// echo '<form method="get">';
// foreach ($categorie_keys as $ckey){
// //    var_dump($response[$ckey]);
//     echo "<br>";
//     echo "<table border='1'><thead>".$ckey."</thead><th>菜名</th><th>数量</th>";

//     $subArr = $response[$ckey];
//         if (count($subArr) == 0){
//             continue;
//         }
//         foreach ($subArr as $item){
// //            var_dump($item);
//             echo '<tr>';
//             echo "<td>".$item['name']."</td><td><input class='inputNumber' type='text' name='".$item['id']."'</td>";
//             echo '</tr>';
//         }


//     echo "</table>";
//     echo "<br>";
// }
// for ($i=0; $i < count($categorie_keys);$i++){

// }

//==========================
// get post request data

if (!empty($_GET)) {
    $user_order_paras['uid'] = $_SESSION['uid'];
    $user_order_paras['time'] = time();
    foreach ($_GET as $key => $value){
        echo $key.':'.$value;
        echo '<br>';
    }
//    echo json_encode($user_order_paras).'paras';

//    var_dump($user_order_paras);

//    $user_order_result =  DBUtile::insertRowInTable('user_order',$user_order_paras);
//    $user_order_result = DBUtile::addOrder($_SESSION['uid']);
//    if ($user_order_result){
//        var_dump($user_order_result);
//    }else{
//        echo '创建订单失败!';
//    }
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

}
?>