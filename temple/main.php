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
    body{
        background-color: rgba(0, 0, 0, 0.1);
    }
.item{
    width:80%;
    height:160px;
    background-color: ;
    margin:5px auto;
    display:flex;

}
.item .img{
    width:33%;
    display:flex;
    justify-content: center;
    align-items: center;
    border:1px solid #999;
}
.item .info{
    width:67%;
    display:flex;
    flex-direction: column;
}
.info div{
    border:1px solid #999;
    border-left:0px;
    border-top:0px;
    flex-grow:1;
}
.info div:nth-child(1){
    border-top:1px solid #999;
}
</style>
    
</head>
<?php
$type=$_GET['type']??0;
$nav='';
$goods=null;
if($type==0){
    $nav="全部商品";
    $goods=$Goods->all(['sh'=>1]);
}else{
    $t=$Type->find($type);
    if($t['big_id']==0){
        $nav=$t['name'];
        $goods=$Goods->all(['sh'=>1,'big'=>$t['id']]);
    }else{
        $b=$Type->find($t['big_id']);
        $nav=$b['name'] ." > ". $t['name'];
        $goods=$Goods->all(['sh'=>1,'mid'=>$t['id']]);
    }
}

?>
<h2><?=$nav;?></h2>

<?php
foreach($goods as $good){
?>

<div class='item'>
 <div class="img">
    <a href="?do=detail&id=<?=$good['id'];?>">
        <img src="./img/<?=$good['img'];?>" style="width:100%;height:110px">
    </a>
 </div>
 <div class="info">
    <div class='ct'><?=$good['name'];?></div>
    <div>
        價錢：<?=$good['price'];?>
        <img src="./icon/0402.jpg" style="float:right" onclick="location.href='?do=buycart&id=<?=$good['id'];?>&qt=1'">
    </div>
    <div>規格：<?=$good['spec'];?></div>
    <div>簡介：<?=mb_substr($good['intro'],0,25);?>...</div>
 </div>   
</div>

<?php
}
?>
