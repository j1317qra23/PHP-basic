<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="select*from students";
$rows=$pdo->query($sql)->fetchAll();
echo "<pre>";
print_r($rows[1][2]);
print_r($rows[1]['parents']);
echo "</pre>";