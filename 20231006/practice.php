<h2> 閏年判斷，給定西元年分
<?php
$year=2400;
echo "年份:".$year;
echo "<hr>";

if($year%4==0 && $year%100!=0){
    echo $year. "是閏年";}
    else { echo  $year. "是平年";}

    echo "<hr>";
    $year=2400;
echo "年份:".$year;
echo "<hr>";

if($year%4==0){
    if($year%100 ! =0);
    echo $year. "是閏年";}
    else if ($year%100==0 && $year %400==0)
    { echo  $year. "是閏年";}

else { echo  $year. "是平年";}
