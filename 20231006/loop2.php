
<?php
$sum=0;

for ($i=1; $i<=10000 ; $i=$i+1) {   
    echo '當$i=' .$i."時";
    echo '$sum+$i的結果是';
    echo $sum ."+" .$i. "=";
    echo $sum+$i;
    echo "<br>";
    $sum+=$i;
}

echo '1加到10000為' .$sum;