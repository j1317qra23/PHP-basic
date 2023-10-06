<?php
$a = 98;

$flag = true;

// 使用for迴圈來檢查是否$a是質數
for ($i = 2; $i < ($a / 2); $i++) {
    // 輸出$a除以$i的餘數，用來檢查是否整除
    echo "$a 除以 $i 餘數" . ($a % $i);

    // 如果$a能夠被$i整除，將$flag設為false，表示$a不是質數，然後跳出迴圈
    if (($a % $i) == 0) {
        $flag = false;
        echo "<br>";
        break;
    }
    echo "<br>";
}

// 根據$flag的值，輸出$a是否為質數
if ($flag == true) {
    echo $a . "是質數";
} else {
    echo $a . "不是質數";
}
echo "<hr>";
?>

<?php
$a = ['甲', '乙', '丙', '丁', '戊'];

// 使用for迴圈遍歷$a數組並輸出每個元素
for ($i = 0; $i < count($a); $i++) {
    // 將每個元素存儲在變數$b中
    $b = $a[$i];
    // 輸出元素
    echo $b;
}
echo "<br>";

// 使用foreach迴圈遍歷$a數組並輸出每個元素
foreach ($a as $b) {
    // 直接輸出元素
    echo $b;
}
?>
