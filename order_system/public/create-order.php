<?php
require_once 'header.php';
require_once 'head.php';

?>

<script>
    function addTableRow(tableId) {
        if (tableId == 'child'){
            $tr = $("#child tr:last");
        }else
        {
            $tr = $("#adult tr:last");
        }
        $tr.after("<tr><td><input type='text'><td></tr>");
    }

</script>


<form method="post">
    <table border="1" id="child">
        儿童
        <thead>
        <th>名称</th>
        <th>数量</th>
        <th>单位</th>

        </thead>
        <tr class="child row1">
            <td><input type="text" name="name" ></td>
            <td><input type="text" name="number"></td>
            <td><input type="text" name="unit"></td>
        </tr>

    </table>
    <input type="button" class="btn" onclick="addTableRow('child')" value="添加一行">
    <br>
    <table border="1" id="adult">
        成人
        <thead>
        <th>名称</th>
        <th>数量</th>
        <th>单位</th>
        </thead>
        <tr class="adult row1">
            <td id="cell1"><input type="text" name="name"></td>
            <td><input type="text" name="number"></td>
            <td><input type="text" name="unit"></td>
        </tr>
    </table>
    <input type="button" class="btn" onclick="addTableRow('adult')" value="添加一行">
    <br>
    <br>
    <button>提交</button>
<!--    <input type="submit" class="btn" id="submit">-->
</form>
<script>

        $('button').click(function () {
            var name = $("td[id='cell1']").text();
            alert('jquery get data: '+name);
            // var html = $.ajax({
            //     type: "POST",
            //     url: '/',
            //     data: 'name=fan&age=90',
            //     async: false
            // }).responseText;
        })

</script>
<?php  
require_once '../FFTools/sqlmanager.php';
require_once '../FFTools/db_mysql.php';
echo json_encode($_POST);
// $sql = 'SELECT * FROM VEGETABLE LEFT OUTER JOIN CATEGORYS WHERE VEGETABLE.CATEGORY=CATEGORYS.ID';
// $sqlite = new MyDB();

// $result = $sqlite->query($sql);
// $categories = array();
// $sqlResult = array();
// while ($row = $result->fetchArray(SQLITE3_ASSOC)){

// //    var_dump($row);
// //    $categories[$row['cname']] = $row;
//     $crow['cid'] = $row['category'];
//     $crow['name'] = $row['cname'];
//     $categories[$row['cname']] = $crow;

//     array_push( $sqlResult,$row);
// }

// $categorie_keys = array_keys($categories);
// $response = array();
// foreach ($categorie_keys as $cname){
//     $citems = array();
//     foreach ($sqlResult as $row){

//         if ($row['cname'] == $cname) {
//             array_push($citems, $row);
//         }
//     }
//     $response[$cname] = $citems;
// }
// //echo json_encode($response);
// //var_dump($response);
// echo '<form method="get">';
// foreach ($categorie_keys as $ckey){
// //    var_dump($response[$ckey]);
//     echo "<br>";
//     echo "<table border='1'><thead>".$ckey."</thead><th>菜名</th><th>数量</th>";

//     $subArr = $response[$ckey];
//         if (count($subArr) == 0){
//             continue;
//         }
//         foreach ($subArr as $item){
// //            var_dump($item);
//             echo '<tr>';
//             echo "<td>".$item['name']."</td><td><input class='inputNumber' type='text' name='".$item['id']."'</td>";
//             echo '</tr>';
//         }


//     echo "</table>";
//     echo "<br>";
// }
// for ($i=0; $i < count($categorie_keys);$i++){

// }

echo '<input class="form-control" type="submit" value="下单">';
echo '</form>';

//==========================
// get post request data

if (!empty($_GET)) {
    $user_order_paras['uid'] = $_SESSION['uid'];
    $user_order_paras['time'] = time();
    foreach ($_GET as $key => $value){
        echo $key.':'.$value;
        echo '<br>';
    }
//    echo json_encode($user_order_paras).'paras';

//    var_dump($user_order_paras);

//    $user_order_result =  DBUtile::insertRowInTable('user_order',$user_order_paras);
//    $user_order_result = DBUtile::addOrder($_SESSION['uid']);
//    if ($user_order_result){
//        var_dump($user_order_result);
//    }else{
//        echo '创建订单失败!';
//    }
//    $paras = array();
//    foreach ($_GET as $vegetableId => $value) {
//        if (!empty($value)) {
//            echo $vegetableId . ':' . $value;
//            echo '<br>';
//            $paras['id'] = $value;
//            $paras['number'] = $value;
//        }
//    }
//    $insert_result = DBUtile::insertRowInTable('vegetables',)

}else{
    echo 'not request';
}
?>
<?  include_once 'foot.php'; include_once 'footer.php';?>

