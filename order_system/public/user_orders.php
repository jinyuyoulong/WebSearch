<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/2
 * Time: 下午4:52
 */
require_once '../FFTools/sqlmanager.php';

$result = DBUtile::selectRow($_SESSION['uid'],'id', 'user_order');
foreach ($result as $row){
    var_dump($row);
}