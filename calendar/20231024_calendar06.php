<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
            border:3px double #999;

        }

        td{
            border:1px solid #999;
            padding:5px 10px;
            text-align: center;
        }
        ul{
            list-style-type: none;
            padding:0;
            margin: 5px;
        }
        ul li{
            display:inline-block;
            font-size: 14px;
        }
    </style>
</head>
<body>
<ul>
        <li><a href="./20231024_calendar01.php">1月</a></li>
        <li><a href="./20231024_calendar02.php">2月</a></li>
        <li><a href="./20231024_calendar03.php">3月</a></li>
        <li><a href="./20231024_calendar04.php">4月</a></li>
        <li><a href="./20231024_calendar05.php">5月</a></li>
        <li><a href="./20231024_calendar06.php">6月</a></li>
        <li><a href="./20231024_calendar07.php">7月</a></li>
        <li><a href="./20231024_calendar08.php">8月</a></li>
        <li><a href="./20231024_calendar09.php">9月</a></li>
        <li><a href="./20231024_calendar10.php">10月</a></li>
        <li><a href="./20231024_calendar11.php">11月</a></li>
        <li><a href="./20231024_calendar12.php">12月</a></li>
    </ul>
<?php 
echo "<h3>";
echo date("西元Y年6月");
echo "</h3>";
$thisMonth=date("Y");
$thisFirstDay=date("Y-6-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("Y-m-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
echo $firstCell;
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        $addDays=7*$i+$j;
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
        if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
            echo "<td style='background:pink'>";

        }else{
            echo "<td>";
        }
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
            echo date("Y-m-d",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
