<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
<h3>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</h3>
<?php
$a = [2, 5, 16, 19, 8, 3];

echo "<pre>";
print_r($a); // 印出原始陣列
echo "</pre>";

// 使用迴圈反轉陣列元素的順序
for ($i = 0; $i < floor(count($a) / 2); $i++) {
    $tmp = $a[$i]; // 暫存當前元素的值
    $a[$i] = $a[count($a) - 1 - $i]; // 將最後一個元素的值複製到當前位置
    $a[count($a) - 1 - $i] = $tmp; // 將暫存的值複製到最後一個位置
}

echo "<pre>";
print_r($a); // 印出反轉後的陣列
echo "</pre>";

echo "<pre>";
print_r(array_reverse($a)); // 使用array_reverse函數檢查反轉結果
echo "</pre>";

?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

