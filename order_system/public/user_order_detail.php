<?php
/**
 * Created by PhpStorm.
 * User: fanjinlong
 * Date: 2018/7/13
 * Time: 上午11:18
 */
include_once 'header.php';?>

		<table border="1">
			儿童
			<thead>
				<th>名称</th>
				<th>数量</th>
				<th>单位</th>
				<th>单价</th>
				<th>合计</th>
			</thead>
			<tr >
				<td>白菜</td>
				<td>2</td>
				<td>斤</td>
				<td>1.3</td>
				<td>2.6</td>
			</tr>
			<tr >
				<td>青菜</td>
				<td>2</td>
				<td>斤</td>
				<td>1.3</td>
				<td>2.6</td>
			</tr>
			<tfoot>
				<tr>合计</tr>
				<tr>100</tr>
			</tfoot>
		</table>
<br>
<table border="1">
			成人
			<thead>
				<th>名称</th>
				<th>数量</th>
				<th>单位</th>
				<th>单价</th>
			</thead>
			<tr >
				<td>白菜</td>
				<td>2</td>
				<td>斤</td>
				<td>1.3</td>
			</tr>
			<tr >
				<td>白菜</td>
				<td>2</td>
				<td>斤</td>
				<td>1.3</td>
			</tr>	
		</table>
		<a href="" class="btn">导出</a>
<?php include_once 'footer.php'?>

