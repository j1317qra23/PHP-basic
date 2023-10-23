<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
<ui>
<li>天干：甲乙丙丁戊己庚辛壬癸</li>
<li>地支：子丑寅卯辰巳午未申酉戌亥</li>
<li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ui>
<?php

// $year = 1024; // 起始年份
// $inputYear = 1084; // 你可以替換成你想要的輸入年份

// // 天干和地支的陣列
// $tianGan = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
// $diZhi = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

// // 計算差距年數
// $diff = $inputYear - $year;

// // 計算天干地支的索引
// $tianGanIndex = $diff % 10;
// $diZhiIndex = $diff % 12;

// // 根據索引取得對應的天干地支
// $tianGanYear = $tianGan[$tianGanIndex];
// $diZhiYear = $diZhi[$diZhiIndex];

// echo "西元{$inputYear}年對應的天干地支年別是：{$tianGanYear}{$diZhiYear}年";

$year=1024;
$inputyear=1084;

$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

$diff=$inputyear-$year;

echo "西元" .$year."是";
$sky=$diff % 10;
$land=$diff % 12;
echo "年";




?>

