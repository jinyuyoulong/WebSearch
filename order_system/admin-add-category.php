<?php  include_once 'header.php'?>
<br>
<br>
<div class="container">
    <form method="get" class="form-signin" action="<?php print $_SERVER['PHP_SELF']?>">
        <div class="input-group mb-3 input-group-sm input-group-text">
            <input class="form-control" type="text" placeholder="添加什么种类?" name="name">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">添加</button>
    </form>
</div>

<?php
require_once 'sqlmanager.php' ;
require_once 'db-sqlite.php';
require_once 'ff-tools.php';

if (!empty($_GET)){

    if (empty($_GET['name']))
    {
        echo '插入的数据格式错误';
        return;
    }
    $insertData = ['name'=>$_GET['name']];
//    $db = new sqlite();
//    $result = $db->insert('categorys',$insertData);

    $result =  DBUtile::insertRowInTable('categorys',$insertData);
    if ($result) {
        echo(__FUNCTION__.' insert success');
    }else{
        echo(__FUNCTION__.' insert faild');
    }

//    if ($result){
//        FFTools::tostUI('insert success', 'admin-home.php');
//    }else{
//        echo 'insert category fail';
//    }
}

?>
<?php include_once 'footer.php';?>
