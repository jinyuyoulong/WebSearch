<?php
require_once '../FFTools/db_mysql.php';
// echo json_encode($_POST);
foreach ($_POST as $key => $value) {
    $tempArr = explode('_',$key);

    if ($tempArr[1] == 'price') {
        $id = $tempArr[0];
        // echo $id.' ';
        $priceArr[$id] = $value;
        $ids[] = $id;
    }
}
// echo json_encode($priceArr);

$sql = "update simple_order set price = case 'id' ";

foreach ($priceArr as $key => $value) {
    // echo json_encode($item).'<br>';
    $subSql = printf("where %u then %s ", $key,$value);
    $sql .= $subSql;
}
// $ids = implode(',',$ids);
// $sql .= " end where id in ($ids)";
echo $sql;
// $dbh = FFPDO::init();
?>