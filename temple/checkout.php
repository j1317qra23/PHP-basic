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
    <style>
        border{
            border: 2px solid lightcyan;
        }
    </style>
</head>
<h2 class="ct">填寫資料</h2>
<!-- table.all>tr*6>td.tt.ct+td.pp>input:text -->
<?php
$row=$Mem->find(['acc'=>$_SESSION['mem']]);
?>
<form action="./api/order.php" method="post">
<table class="all  border">
    <tr>
        <td class="ct  border">登入帳號</td>
        <td class=" border">
            <?=$row['acc'];?>
        </td>
    </tr>
    <tr>
        <td class="ct  border">姓名</td>
        <td class=" border"><input type="text" name="name" value="<?=$row['name'];?>"></td>
    </tr>
    <tr>
        <td class="ct  border">聯絡電話</td>
        <td class="border"><input type="text" name="tel" value="<?=$row['tel'];?>"></td>
    </tr>
    <tr>
        <td class="ct  border">聯絡住址</td>
        <td class=" border"><input type="text" name="addr" value="<?=$row['addr'];?>"></td>
    </tr>
    <tr>
        <td class="ct  border">電子信箱</td>
        <td class=" border"><input type="text" name="email" value="<?=$row['email'];?>"></td>
    </tr>
</table>
<table class="all  border">
    <tr class="ct  border">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>單價</td>
        <td>小計</td>
    </tr>
<?php
$sum=0;
foreach($_SESSION['cart'] as $id => $qt){
    $goods=$Goods->find($id);
?>
    <tr class="ct  border">
        <td><?=$goods['name'];?></td>
        <td><?=$goods['no'];?></td>
        <td><?=$qt;?></td>
        <td><?=$goods['price'];?></td>
        <td><?=$goods['price'] * $qt;?></td>
    </tr>
<?php
    $sum+=$goods['price'] * $qt;
}
?>
</table>
<div class="all ct  border">總價:<?=$sum;?>元</div>
<div class="ct">
    <input type="hidden" name="total" value="<?=$sum;?>">
    <input type="submit" value="確定送出">
    <input type="button" value="返回修改訂單" onclick="location.href='?do=buycart'">
</div>
</form>