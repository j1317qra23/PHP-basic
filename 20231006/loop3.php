
<h1>迴圈練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>
<ul>
    <li>1,3,5,7,9....n</li>
    <li>10,20,30,40,50,60...n</li>
    <li></li>
</ul>

<?php
$n=100;
for ($i=1; $i <=100 ; $i=$i+2) { 
    echo $i;
    echo ",";
}

echo "<hr>"

for ($i=1; $i <=$n ; $i++) {  
   echo $i*10;
   echo ",";
}







