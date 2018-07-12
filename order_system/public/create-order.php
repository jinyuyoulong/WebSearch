<?php
require_once 'header.php';
require_once 'head.php';
require_once '../FFTools/sqlmanager.php';

$cagetories = DBUtile::fetchAllRow('categorys');
echo 'categorys all is:<br/>';
foreach ($cagetories as $row){
    echo $row['id'].' '.$row['name'].' | ';
}
echo '<hr/>';

$result = DBUtile::fetchAllRow('vegetable');
echo '<hr/>vegetables is:<br/>';
foreach ($result as $row){
    echo("<table border='1'><TR><TD>".'名称：'.$row['name']."</TD></TR></table>");
}
?>

<div class="container">
    <hr/>
    show vegerable and creade order
</div>
