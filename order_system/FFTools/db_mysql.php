<?php


try{
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=SchoolOrders','root','333',array(
        PDO::ATTR_PERSISTENT => true
    ));
    foreach ($dbh->query('SELECT * FROM user') as $row){
        print_r($row);

    }
}catch (PDOException $e){
    print "Error!: ".$e->getMessage()."<br>";
    die();
}

//$mysqli = new mysqli("127.0.0.1", "root", "333", "SchoolOrders");
//if ($mysqli !=null){
//    $sql = "SELECT * FROM user";
//    $result = $mysqli->query($sql);
//    while ($row = $result->fetch_row()){
//        echo json_encode($row);
//    }
//    /* free result set */
//    $result->free();
//
//}
//
///* close connection */
//$mysqli->close();
class FFPDO extends PDO{
    static $_signle_utile;
    function init(){
        if ()
    }
}
?>