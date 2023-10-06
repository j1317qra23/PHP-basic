<?php
$score=90;
echo "我的成績:" . $score;
echo "<br>";
echo "判斷為:";
if($score>=60){
    echo "及格";
}else{
    echo "!不及格";
}

echo "<br>";
// 使用朝狀判斷
if($score>=90 && $score<=100){
    $level="A";
}
else if($score>=80 && $score<=89){
    $level="B";
}
else if($score>=70 && $score<=79){
    $level="C";
}
else if($score>=60 && $score<=69){
    $level="D";
}
else if($score>=0 && $score<=59){
    $level="E";
}

else if($score>=90 && $score<=100){
    $level="A";
}


echo "成績等級為:" .$level;
echo "<br>";
switch($level)
{
    case "A":
        echo "表現優良";
        break;
        case "B":
            echo "值得肯定";
            break; 
            case "C":
            echo "需要練習";
            break;
            case "D":
                echo "加強";
                break;
            default:
            echo "無心學業";            }
            ?>
