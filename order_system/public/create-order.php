<?php
require_once 'header.php';
require_once 'head.php';
require_once '../FFTools/sqlmanager.php';

$result = DBUtile::fetchAllRow('vegetable');
$categories = DBUtile::fetchAllRow('categorys');
$response = array();
foreach ($categories as $row){
    $rowItems = array();
    foreach ($result as $item_row){

        if ($row['id']  == $item_row['category']){
            array_push($rowItems, $item_row);

        }
    }
    $row['items'] = $rowItems;
    array_push($response, $row);
}

echo '<form method="get">';
foreach ($response as $row){
    echo "<br>";
    if (count($row['items']) != 0){

        echo "<table border='1'><thead>".$row['name']."</thead><th>菜名</th><th>数量</th>";
        foreach ($row['items'] as $item){
            echo '<tr>';
            echo "<td>".$item['name']."</td><td><input type='text' name='".$item['id']."'</td>";
            echo '</tr>';
        }
        echo "</table>";
    }
    echo "<br>";
}
echo '<input class="form-control" type="submit" value="下单">';
echo '</form>';

//==========================
// get post request data

echo "uid is ".$_SESSION['uid'];

foreach ($_GET as $vegetableId => $value){
    if (!empty($value)){
        echo $vegetableId.':'.$value;
    }
}
?>


<?  include_once 'foot.php'; include_once 'footer.php';?>

array(3) {
[0]=> array(2) {
    ["id"]=> int(0) ["name"]=> string(6) "叶菜"
    }
[1]=> array(2) {
    ["id"]=> int(1) ["name"]=> string(3) "肉"
    }
[2]=> array(2) {
    ["id"]=> int(2) ["name"]=> string(3) "鸡"
} }
