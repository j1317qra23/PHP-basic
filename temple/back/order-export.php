<?php
if (!empty($_POST)) {
    // 進行金額的篩選
    $whereClause = ""; // 預設的 WHERE 條件

    // 篩選日期
    if (!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $whereClause .= " AND `orderdate` BETWEEN '{$start_date}' AND '{$end_date}'";
    }

    // 篩選金額
    if (!empty($_POST['min_amount']) && !empty($_POST['max_amount'])) {
        $min_amount = $_POST['min_amount'];
        $max_amount = $_POST['max_amount'];
        $whereClause .= " AND `total` BETWEEN {$min_amount} AND {$max_amount}";
    }

    // 移除 WHERE 子句的多餘空白和 AND
    $whereClause = trim($whereClause, " AND");

    if (!empty($whereClause)) {
        // 只有在 $whereClause 不為空時才添加 WHERE 子句
        $whereClause = " WHERE " . $whereClause;
    }

    // SQL 查詢
    $rows = $Order->all("orders", $whereClause);

    // 創建 CSV 檔案
    $filename = date("Ymd") . rand(100000000, 999999999);
    $file = fopen("./doc/{$filename}.csv", 'w+');
    fwrite($file, "\xEF\xBB\xBF");
    $chk = false;
    foreach ($rows as $row) {
        if (!$chk) {
            $cols = array_keys($row);
            fwrite($file, join(",", $cols) . "\r\n");
            $chk = true;
        }
        fwrite($file, join(",", $row) . "\r\n");
    }
    fclose($file);

    // 顯示下載連結
    echo "<a href='./doc/{$filename}.csv' download>檔案已匯出，請點此連結下載</a>";
}
?>


<style>
    table{
        border-collapse: collapse;
    }
    td{
        border:1px solid #666;
        padding:5px 12px;
    }
    th{
        border:1px solid #666;
        padding:5px 12px;
        background-color: black;
        color:white;
    }
</style>
<script src="./js/jquery-3.4.1.min.js"></script>

<form action="" method="post" id="">
    <label for="start_date">開始日期：</label>
    <input type="date" name="start_date" id="start_date">

    <label for="end_date">結束日期：</label>
    <input type="date" name="end_date" id="end_date">

   <br> <label for="min_amount">最小金額：</label>
    <input type="number" name="min_amount" id="min_amount">

    <label for="max_amount">最大金額：</label>
    <input type="number" name="max_amount" id="max_amount">
    <input type="submit" value="匯出選擇的資料">

    <br>
    <label for="keyword">關鍵字：</label>
<input type="text" name="keyword" id="keyword">
<button type="button" id="searchBtn">搜尋</button>
    




<table>
    <tr>
        <th>
            <input type="checkbox" name="" id="select">
            勾選</th>
        <th>id</th>    
        <th>訂單編號</th>
        <th>金額</th>
        <th>會員帳號</th>
        <th>姓名</th>
        <th>下單日期</th>
        <th>信箱</th>
        <th>地址</th>
        <th>電話</th>
        <th>cart</th>
    </tr>
<?php
$rows=$Order->all('orders');
foreach($rows as $row){
    echo "<tr>";
    echo "<td>";
    echo "<input type='checkbox' name='select[]' value='{$row['no']}'>";
    echo "</td>";
    foreach($row as $value){
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo "</tr>";
}


?>
</table>
</form>


<script>
$("#select").on("change",function(){
    if($(this).prop('checked')){
        $("input[name='select[]']").prop('checked',true);
    }else{
        $("input[name='select[]']").prop('checked',false);
    }
})
$(document).ready(function () {
    // 當按下搜尋按鈕時
    $("#searchBtn").click(function () {
        var keyword = $("#keyword").val().toUpperCase();

        // 隱藏所有的行
        $("tr").hide();

        // 顯示匹配關鍵字的行
        $("tr").filter(function() {
            return $(this).text().toUpperCase().includes(keyword);
        }).show();
    });
});


</script> 