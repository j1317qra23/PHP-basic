<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>

<ul>
<li>2021/10/05</li>
<li>10月5日 Tuesday</li>
<li>2021-10-5 12:9:5</li>
<li>2021-10-5 12:09:05</li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php
echo date("Y/m/d");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y-n-j G:H:s");
echo "<br>";

echo date("今天是西元Y年m月d日");
if(date("N")<=5){
    echo "上班日";
}else{
    echo"假日";
}
?>





