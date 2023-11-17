<h1>日期與時間</h1>
<?php
date_default_timezone_set('asia/taipei');
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("n-j-l-W-N-l-Z-W-F-t-W-F-o-x-y-X-A-a-B-g-y-G");
?>
<h2> strtotime</h2>
<?php
echo strtotime("now");
$time = strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s", $time);
echo "<br>";
echo $date1 = '2023-10-24';
echo "<br>";
echo $date2 = '2023-11-15';
echo "<br>";
$days = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);
echo $date1 . '到' . $date2 . "有" . $days . "天";
?>
<h2>計算下次生日天數</h2>
<?php
$date="1974-10-07";
$brith=strtotime($date);
$diff=strtotime(date("Y")."-".date("m-d",$brith));
$today=strtotime('now');
if($diff>$today){
    $days=($diff-$today)/(60*60*24);
}else{
    $diff=strtotime("+1 year",$diff);
    $days=($diff-$today)/(60*60*24);
}

echo "距離下一次生日:".date("Y-m-d",$diff)."還有".floor($days)."天";