<?php
$a=['甲','乙','丙','丁','戊',];

for ($i=0; $i < count($a); $i++) { 
  echo $a[$i];
}
echo "<br>";

foreach($a as $idx => $b) {
  echo $idx ."=>" .$b;
  echo "<br>";
}