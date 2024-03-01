<?php


if(!empty($_POST)){
$rows=$Order->all("orders"," where  `no` in ('".join("','",$_POST['select'])."')");

$filename=date("Ymd").rand(100000000,999999999);
$file=fopen("./doc/{$filename}.csv",'w+');
fwrite($file, "\xEF\xBB\xBF");
$chk=false;
foreach($rows as $row){
    if(!$chk){
        $cols=array_keys($row);
        fwrite($file,join(",",$cols)."\r\n");
        $chk=true;
    }
    fwrite($file,join(",",$row)."\r\n");
}
fclose($file);

echo "<a href='./doc/{$filename}.csv'  download>檔案已匯出，請點此連結下載</a>";
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
<form action="" method="post">
    <input type="submit" value="匯出選擇的資料">
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
</script>