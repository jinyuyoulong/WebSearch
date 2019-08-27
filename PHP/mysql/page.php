<?
include 'connection.php';

$count_sql = "select count(id) as c from book";
$result = mysqli_query($conn, $count_sql);
$data = mysqli_fetch_assoc($result);
// print_r($data); // echo和print 不能打印数组，只能打印字符串
$count = $data['c'];
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$num = 2;
$total = ceil($count/$num);
if ($page<=1) {
	$page = 1;
}
if ($page >= $total) {
	$page = $total;
}
$offset = ($page-1)*$num;

// desc:降序 asc:升序(默认)
$sql = "select id,username,createtime,createip from book order by id limit $offset ,$num";

$result = mysqli_query($conn, $sql);
if($result && mysqli_num_rows($result)){
	echo '<from action="delete.php" method="post ">';
    //显示列表代码段
    echo '<table width="800" border="1">';

	while ($row = mysqli_fetch_assoc($result)) {

		echo '<tr>';
		echo '<td><input type="checkbox" name="id[]" value="' .$row['id'] . '"/></td>';
		echo '<td>' . $row['username'] . '</td>';
		echo '<td>' . date('Y-m-d H:i:s', $row['createtime']) . '</td>';
		echo '<td>' . long2ip($row['createip']) . '</td>';
		echo '<td><a href="edit.php?id=' . $row['id'] . '">编辑用户</a></td>';
		echo '<td><a href="delete.php?id=' . $row['id'] . '">删除用户</a></td>';

		echo '</tr>';
	}
    echo('<tr>
	<td colspan="5">
	<a href="page.php?page=1" id="href">首页</a>
	<a href="page.php?page=' . ($page-1).'" id="href">上一页</a>
	<a href="page.php?page='.($page+1).'" id="href">下一页</a>
	<a href="page.php?page='.$total.'" id="href">尾页</a>
	当前是第'.$page.'页，共'.$total.'页
	</td>
	</tr>
	');
	echo '</table>';
    echo '<input type="submit" value="删除" name="submit">';
    echo '</form>';

}else{

    //提示没有结果的代码段
    echo("没有数据");
}


mysqli_close($conn);
?>