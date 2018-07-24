<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<form>
		<table border="1" id="child">
        儿童
        <thead>
        <th>名称</th>
        <th>数量</th>
        <th>单位</th>

        </thead>
        <tr class="row1">
            <td><input type="text" name="name" value="fan"></td>
            <td><input type="text" name="number" value="3"></td>
            <td><input type="text" name="unit" value="1"></td>
        </tr>

    </table>
    <button>提交</button>
	</form>

    <script>

        $('button').click(function () {
            var name = $("table,.child");
            alert('jquery get data: '+$('from').serialize());
            // var html = $.ajax({
            //     type: "POST",
            //     url: '/',
            //     data: 'name=fan&age=90',
            //     async: false
            // }).responseText;
        })

</script>
</body>
</html>