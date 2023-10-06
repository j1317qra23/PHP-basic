<?php
$a = ['甲', '乙', '丙', '丁', '戊', '己',];

// 使用for迴圈遍歷$a數組
for ($i = 0; $i < count($a); $i++) {
    // 輸出$a數組中的每個元素
    echo $a[$i];
}
echo "<br>";

// 使用foreach迴圈遍歷$a數組，同時獲取索引和值
foreach ($a as $idx => $b) {
    // 輸出每個元素的索引和值
    echo $idx . "=>" . $b;
    echo "<br>";
}
?>
