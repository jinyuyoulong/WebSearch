<?php
include_once 'FFTools/sqlmanager.php';
$sql = 'SELECT * FROM VEGETABLE LEFT OUTER JOIN CATEGORYS WHERE VEGETABLE.CATEGORY=CATEGORYS.ID';
$handler = new MyDB();
$mutilResult =  $handler->query($sql);
while ($row = $mutilResult->fetchArray(SQLITE3_ASSOC)){
//    var_dump($row);
    echo '<br>';
    echo "categoryid: ".$row['category']." ".$row['cname']."id: ".$row['id'].$row['name'];
echo '<br>';
}

?>