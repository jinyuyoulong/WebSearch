<?php
require_once '../FFTools/db_mysql.php';

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
     echo '更新成功'.'<br>';
//     echo '<a href="admin-order-schools.php?orderDate=">返回</a>';
     echo '<a href='.'".$_SERVER["HTTP_REFERER"]."'.'></a>';
 }else{
     $dbh->rollBack();
     echo '没有需要更新的数据'.'<br>';
//     echo '<a href="admin-home.php">返回</a>';
     echo $messsage."<a href='".$_SERVER["HTTP_REFERER"]."'>返回</a>";
 }

?>