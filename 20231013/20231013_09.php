<style>
    * {
        font-family: 'Courier New', Courier, monospace;
        line-height: 10px;
    }
  
</style>
<h2>矩形</h2>
<?php

for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*"; 
        } else if ($j==0 || $j==6){
            echo "*"; 
        }else {
            echo "&nbsp;"; 
        }
     
    }
    echo "<br>";
}
?>

<h2>矩形加對角線</h2>
<?php

for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*"; 
        } else if ($j==0 || $j==6 || $j==$i || $i+$j==+6){
            echo "*"; 
        }else {
            echo "&nbsp;"; 
        }
     
    }
    echo "<br>";
}
?>


<h2>矩形加對角線</h2>
<?php

for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*"; 
        } else if ($j==0 || $j==6){
            echo "*"; 
        } else if ($j==$i || $i+$j==+6){
                echo "<span style='color:red'>*</span>";    
        }else {
            echo "&nbsp;"; 
        }
     
    }
    echo "<br>";
}
?>