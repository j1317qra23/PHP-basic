<?php

$a=83;

$flag=true;
for($i=2;$i<$a;$i++){
    echo "$a 除以 $i 餘數" .($a % $i);
    if (($a % $i)==0) {
        echo "不是質數";
    }else{
        echo "是質數";
        }
        echo "<br>";
}
