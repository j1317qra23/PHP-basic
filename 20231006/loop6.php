<?php



$a=98;

$flag=true;
for ($i=2; $i < ($a/2) ; $i++) { 
   echo "$a 除以 $i 餘數" . ($a % $i);
   if(($a % $i) == 0){
    $flag=false;
    echo "<br>";
    break;
   }
   echo "<br>";
}

if($flag==true){
  echo $a . "是質數";
}else{
    echo $a . "不是質數";

}
echo "<hr>";
?>
<?php
$a=['甲','乙','丙','丁','戊',];

for ($i=0; $i < count($a); $i++) { 
  echo $a[$i];
}
echo "<br>";

foreach($a as $b) {
  echo $b;
}