<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/13
 * Time: 上午11:16
 */
include_once 'header.php';
require_once '../FFTools/db_mysql.php';

$timeArr = array();

echo '<div class="container">';
echo '<table border="1">';
        echo '<tr>';
            echo '<th>时间</th>';
        echo '</tr>';

$dbh = FFPDO::init();
foreach ($dbh->query('select * from user_order')->fetchAll() as $row){
    $timeArr[] = $row;
    
    $datetime = strtotime($row['create_time']);
    $datetime = date('Y-m-d',$datetime);
    $orderId = $row['id'];
        echo '<tr >';
            $dd = sprintf('<td><a href="user_order_detail.php?oId=%d">%s</a> </td>',$orderId,$datetime);
            echo $dd;
//            echo '<td><a href="user_order_detail.php">$row["create_time"]</a> </td>';
        echo '</tr>';

}
    echo '</table>';

?>
<form method="get" action="user_group_time_orders.php">
    <label>起始时间</label><input type="date" name="startDate">
    <br>
    <label>终止时间</label><input type="date" name="endDate" max="2018-07-27" id="endDate"><br>
    <input type="submit" value="导出单位时间账单">
</form>
</div>
<script>
    // $('input[name="endDate"]').change(function(){
    //     var myDate = new Date();  //获取当前时间对象，精确到当前的时、分、秒
    //
    //     var this_time=$('input[name="endDate"]').val();//获取用户选择后的时间值
    //
    //     var this_datetime=new Date(this_time);//获取用户选择的时间，生成时间对象  具体时间为时间8:00:00
    //     var year = myDate.getFullYear();    //获取当前时间的年份 格式xxxx 如：2016
    //     var month =myDate.getMonth()+1;     //获取当前时间的月份 格式1-9月为x， 10-12月为xx 如：11
    //     var date = myDate.getDate();        //获取当前时间的日期 格式同月份 如11
    //     myDate=new Date(year+'-'+month+'-'+date);  //获取根据上述时间生成的时间对象 具体时间为0:00:00
    //     var now=new Date(year+'-'+month+'-'+date+' 8:00:00');
    //     myDate.setDate(now.getDate()-7); //设置now对象相应日期的七天前日期 具体时间为0:00:00
    //     $('#endDate').attr("max",myDate);
    //     //
    //     // if(this_datetime<myDate||this_datetime>now){    //时间对象可以直接比较大小
    //     //     alert('拜访时间需选择今天及以前7天内的时间');
    //     //     $('input[name="endDate"]').val('');
    //     // };
    // });

    window.onload = function () {
        function getDate() {
            // debugger;
            let today = new Date();
            let month = today.getMonth()+1;
            month = month > 9 ? month : '0'+month
            var date = (today.getFullYear())+"-"+month+"-"+(today.getDate())
            // let date = today.toLocaleDateString();
            return date;
        }
        $('#endDate').attr('max',getDate())
        // document.getElementById('endDate').setAttribute("max",getDate())
    }
</script>
<?php include_once 'footer.php'?>