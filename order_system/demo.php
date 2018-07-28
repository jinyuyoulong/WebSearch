<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<form method="POST">
		<table border="1" id="child">
        <caption>儿童</caption>
        <thead>
        <th>名称</th>
        <th>数量</th>
        <th>单位</th>
        </thead>
            <tbody>
            <tr class="row1">
                <td><input type="text" name="name" value="fan"></td>
                <td><input type="text" name="number" value="3"></td>
                <td><input type="text" name="unit" value="1"></td>
            </tr>
            </tbody>
            <tbody>
            <tr class="row2">
                <td><input type="text" name="name" value="fan"></td>
                <td><input type="text" name="number" value="3"></td>
                <td><input type="text" name="unit" value="1"></td>
            </tr>
            </tbody>

    </table>
    <input type="submit" name="" onclick="submitData()">
    <!-- <button onclick="submitData()">提交</button> -->
	</form>

    <script>
        function submitData(){
        	var name = document.getElementById('child');
        	alert(name.rows(0).cells(0).innertText);
            // var paras = $('table .child tr').children("td:eq(4)").find("input").val();
            // alert(paras);
            // console.log(paras);
        }
        // $('button').click(function () {
        //     // var name = $("table").children();
        //     // alert('jquery get data: '+name);
        //     console.log('djakd');
        //     console.log(name);
        //     // var html = $.ajax({
        //     //     type: "POST",
        //     //     url: '/',
        //     //     data: 'name=fan&age=90',
        //     //     async: false
        //     // }).responseText;
        // })

</script>
</body>
</html>
<?php
echo(json_encode($_POST));
?>