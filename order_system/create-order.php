<?php
require_once 'header.php';
require_once 'head.php';
require_once 'sqlmanager.php';

$cagetories = DBUtile::fetchAllRow('categorys');
foreach ($cagetories as $row){
    echo $row['name'];
}
$result = DBUtile::fetchAllRow('vegetable');
foreach ($result as $row){
    echo("<table border='1'><TR><TD>".'名称：'.$row['name']."</TD></TR></table>");
}
?>

<div class="container">
    show vegerable and creade order
</div>
