<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/3
 * Time: 下午3:26
 */
include_once 'header.php';
?>
<div class="container">
    <h3>货架</h3>
    <br><br>
    <a class="btn btn-primary" href="#">link</a>
    <br>
    <?php 
    	require_once 'sqlmanager.php';
    	$resultArr = DBUtile::fetchAllRow('vegetable');
    	var_dump($resultArr);
     ?>
</div>

