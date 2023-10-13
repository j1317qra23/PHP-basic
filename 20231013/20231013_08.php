

<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>


<h2>正三角形</h2>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>倒正三角形</h2>
<?php
for($i=4;$i>=0;$i--){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>菱形</h2>
<?php

?>