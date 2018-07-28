<?php
require_once 'header.php';
require_once 'head.php';

?>

<script>
    function addTableRow(tableId) {
        if (tableId == 'table_child'){
             $tr = $("#table_child tr:last");
            // var elements = "<tbody><tr><td><input type='text' name='child_name[]'><td>";
            // elements = elements+"<td><input type="text" name="child_number[]"></td>";
            // elements = elements+"<td><input type=\"text\" name=\"child_unit[]\"></td></tr></tbody>";
            // alert(elements);
            // $tr.after(elements);
            $tr.after("<tr><td><input type='text' name='child_name[]'></td><td><input type='text' name='child_number[]'></td><td><input type='text' name='child_unit[]'></td></tr>");

        }else
        {
            $tr = $("#table_adult tr:last");
            $tr.after("<tr><td><input type='text' name='adult_name[]'></td><td><input type='text' name='adult_number[]'></td><td><input type='text' name='adult_unit[]'></td></tr>");

        }
    }

</script>


<form method="post" action="create-order-action.php">
    <table border="1" id="table_child">
        <caption>儿童</caption>
        <thead>
        <tr>
            <th>名称</th>
            <th>数量</th>
            <th>单位</th>
        </tr>
        </thead>

        <tbody>
            <tr class="child row1">
                <td><input type="text" name="child_name[]" placeholder=""></td>
                <td><input type="text" name="child_number[]" placeholder=""></td>
                <td><input type="text" name="child_unit[]" placeholder=""></td>
            </tr>
        </tbody>


    </table>
    <input type="button" class="btn" onclick="addTableRow('table_child')" value="添加一行">
    <br>
    <table border="1" id="table_adult">
         成人
        <tr>
        <th>名称</th>
        <th>数量</th>
        <th>单位</th>
        </tr>
        <tbody>
            <tr class="adult row1">
            <td id="cell1"><input type="text" name="adult_name[]" placeholder=""></td>
            <td><input type="text" name="adult_number[]" placeholder=""></td>
            <td><input type="text" name="adult_unit[]" placeholder=""></td>
        </tr>
        </tbody>
    </table>
    <input type="button" class="btn" onclick="addTableRow('table_adult')" value="添加一行">
    <br>
    <br>
    <input type="submit" class="btn" id="submit" onclick="postData()">
</form>
<script>
    function postData() {
        console.log("dfa");
    }
</script>

<?  include_once 'foot.php'; include_once 'footer.php';?>

