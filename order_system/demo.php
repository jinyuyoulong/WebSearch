<?php
include_once 'FFTools/sqlmanager.php';
$sql = 'select * from categorys, vegetable';
//$sql = 'SELECT * FROM VEGETABLE CROSS JOIN CATEGORYS';
$handler = new MyDB();
$mutilResult =  $handler->query($sql);
while ($row = $mutilResult->fetchArray(SQLITE3_ASSOC)){
//    var_dump($row);
    echo '<br>';
    echo "categoryid: ".$row['category']." ".$row['cname']."id: ".$row['id'].$row['name'];
echo '<br>';
}

?>