<?php
require_once 'header.php';
require_once 'head.php';
require_once '../FFTools/sqlmanager.php';

$sql = 'SELECT * FROM VEGETABLE LEFT OUTER JOIN CATEGORYS WHERE VEGETABLE.CATEGORY=CATEGORYS.ID';
$sqlite = new MyDB();

$result = $sqlite->query($sql);
$categories = array();
$sqlResult = array();
while ($row = $result->fetchArray(SQLITE3_ASSOC)){

//    var_dump($row);
//    $categories[$row['cname']] = $row;
    $crow['cid'] = $row['category'];
    $crow['name'] = $row['cname'];
    $categories[$row['cname']] = $crow;

    array_push( $sqlResult,$row);
}

$categorie_keys = array_keys($categories);
$response = array();
foreach ($categorie_keys as $cname){
    $citems = array();
    foreach ($sqlResult as $row){

        if ($row['cname'] == $cname) {
            array_push($citems, $row);
        }
    }
    $response[$cname] = $citems;
}
//echo json_encode($response);
//var_dump($response);
echo '<form method="get">';
foreach ($categorie_keys as $ckey){
//    var_dump($response[$ckey]);
    echo "<br>";
    echo "<table border='1'><thead>".$ckey."</thead><th>菜名</th><th>数量</th>";

    $subArr = $response[$ckey];
        if (count($subArr) == 0){
            continue;
        }
        foreach ($subArr as $item){
//            var_dump($item);
            echo '<tr>';
            echo "<td>".$item['name']."</td><td><input class='inputNumber' type='text' name='".$item['id']."'</td>";
            echo '</tr>';
        }


    echo "</table>";
    echo "<br>";
}
for ($i=0; $i < count($categorie_keys);$i++){

}

echo '<input class="form-control" type="submit" value="下单">';
echo '</form>';

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
    echo 'not request';
}
?>


<?  include_once 'foot.php'; include_once 'footer.php';?>

