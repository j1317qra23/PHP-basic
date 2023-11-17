<?php
// 自訂函示
$c=20;
function sum($a,$b,$d,$e){
    global $c;
    $sum=(($a+$b+$c)/$d*$e);
    echo "輸入:".$a."、".$b."、".$d."、".$e;
    echo "<br>";
    return $sum;

}

$sum=sum(10,20,5,10);    
echo "總和是".$sum;
echo "<hr>";
$sum=sum(17,50,10,5);    
echo "總和是".$sum;
echo "<hr>";

echo"總和是:".sum(5,77,10,5);
?>
<h2>不定參數用法</h2>
<!-- ...$arg 解構賦值 -->
<?php
function sum2(...$arg){
    $sum=0;
foreach ($arg as $num) {
    if(is_numeric($num)){
        $sum +=$num;
    }
}
  return $sum;
}

echo sum2(1,2,);
echo "<hr>";
echo sum2(23,45,67);
echo "<hr>";
echo sum2(23,45,67,89,10,11,14,15,16);
echo "<hr>";
?>


<h1>自訂函數預設值</h1>
<?php
// $c=3 預設值，但是後面可以填別的數字
function sum3($a,$b,$c=3){
    $sum=($a+$b)*$c;
    echo "$a 、 $b ,倍數 $c <br>";
  return $sum;
}

echo "總和是".sum3(10,15);
echo "<hr>";
echo "總和是".sum3(10,15,100);