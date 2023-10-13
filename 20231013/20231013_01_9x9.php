<h2>九九乘法表</h2>
<?php
for($j=1;$j<=9;$j++){
for ($i = 1; $i <= 9; $i++) { 
    echo $j . ' * ' . $i . ' = ' . ($j * $i) . "&nbsp&nbsp&nbsp";
}
// 迴圈走法 1*1 跑到1*9 跑完才換2*1

echo "<br>";
}



?>

