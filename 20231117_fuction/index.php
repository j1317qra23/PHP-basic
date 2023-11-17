<?php
// 自訂函示
$c=20;
function sum($a,$b){
    global $c;
    $sum=$a+$b+$c;
    echo "輸入:".$a."、".$b;
    echo "<br>";
    return $sum;

}

$sum=sum(10,20);    
echo "總和是".$sum;
echo "<hr>";
$sum=sum(17,50);    
echo "總和是".$sum;
echo "<hr>";

echo"總和是:".sum(5.,77);