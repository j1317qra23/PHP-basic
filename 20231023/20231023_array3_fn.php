<h2>利用程式來產生陣列</h2>

<?php

$nine=[];

for($j=1;$j<=9;$j++){

    for ($i=1;$i<=9;$i++){
        $nine[]="$j * $i = ".($j * $i);
    }

}
//print_r($nine);

foreach($nine as $idx => $value){
    echo $value;
    if($idx%9==8){
        echo "<br>";
    }
}
?>
<style>
    table{
        border-collapse: collapse;
    }
    table td{
        border:1px solid #666;
        padding:5px 9px;
    }
</style>
<?php
echo "<table>";
foreach($nine as $idx => $value){
   // echo $value;
    if($idx%9==0) {
       
       echo "<tr>
                <td>$value</td>";
        }else if($idx%9==8){
           echo "<td>$value</td>
            </tr>";
        }else{
           echo "<td>$value</td>";
        }
}
echo "</table>";
?>
