<?php
$a[] = 10;
$a[] = 30;
$a[] = '泰山';
$a[] = '新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo $a[3];

$b = [];
$b['姓名'] = 'Jason';
$b['最高學歷'] = '淡江大學';
$b['tel'] = '0910123456';
$b['血型'] = 'O';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['tel'];
echo "<hr>"; // 正確添加水平線

$c = [];
$c['name'] = 'jason';
$c['興趣'] = ['看書', '打電動', '追劇']; // 使用英文引號

echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo $c['興趣'][0];
echo $c['興趣'][2];
?>
