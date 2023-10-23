<?php

$array=[3,2,7,10,30,17];
// $score=[
//     '姓名'=>'小明',
//     '成績'=>98
// ]
// if( in_array(10,$array)){
//     echo "數字在陣列中";
// } else {
//     echo "數字不在陣列中";
// }


echo "<pre>";
print_r (array_keys($array));
echo"</pre>";

echo "<pre>";
print_r($array);
echo"</pre>";

echo "<pre>";
rsort($array);
print_r($array);
echo"</pre>";



$ss="today is a good day";
$tt=explode(" ",$ss);
print_r($tt);
$cc=implode("--",$tt);
echo $cc;



