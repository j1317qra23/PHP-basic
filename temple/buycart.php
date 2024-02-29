<?php include_once './api/db.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>┌精品電子商務網站」</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>
<?php

if(isset($_GET['id'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}

if(!isset($_SESSION['mem'])){
    to("?do=login");
}

echo "<h2 class='ct'>{$_SESSION['mem']}的購物車</h2>";

if(empty($_SESSION['cart'])){
    echo "<h2 class='ct'>購物車中尚無商品</h2>";
}

?>
<table class="all">
    <tr class=" ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>單價</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
<?php
foreach($_SESSION['cart'] as $id => $qt){
    $goods=$Goods->find($id);
?>
    <tr class=" ct">
        <td><?=$goods['no'];?></td>
        <td><?=$goods['name'];?></td>
        <td><?=$qt;?></td>
        <td><?=$goods['stock'];?></td>
        <td><?=$goods['price'];?></td>
        <td><?=$goods['price'] * $qt;?></td>
        <td><img src="./icon/0415.jpg" onclick="delCart(<?=$id;?>)"></td>
    </tr>
<?php
}
?>
</table>
<div class="ct">
    <img src="./icon/0411.jpg" onclick="location.href='front.php'">
    <img src="./icon/0412.jpg" onclick="location.href='?do=checkout'">
</div>

<script>
function delCart(id){
    $.post("./api/del_cart.php",{id},()=>{
        location.href="?do=buycart";
    })
}
</script>
