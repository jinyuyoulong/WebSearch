<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/3
 * Time: 下午3:26
 */
include_once 'header.php';
include_once 'head.php';
?>
<div class="container">
    <h3>货架</h3>
    <br><br>
    <a class="btn btn-primary" href="#">link</a>
    <br>
    <?php 
    	require_once 'sqlmanager.php';
    	$resultArr = DBUtile::fetchAllRow('vegetable');
    	foreach ($resultArr as $row) {

    		echo("<table border='1'><TR><TD>".'名称：'.$row['name']."</TD><TD>".'单价：'.$row['price']."</TD></TR></table>");
    	}
     ?>
</div>

