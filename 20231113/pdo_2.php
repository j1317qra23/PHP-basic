<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

// $sql="select*from students";
// $rows=$pdo->query($sql)->fetchAll();
// echo "<pre>";
// print_r($rows[1][2]);
// print_r($rows[1]['parents']);
// echo "</pre>";

// $sql="insert into `dept`(`code`,`name`) 
// values('801','會計科');";
// $pdo->query($sql);

// $sql="update `classes` set `code`='101',`name`='一年一班'
// where `id`='1'";
// $pdo->query($sql);

// $sql="delete from `dept` where `dept_id`='8'";
// $pdo->query($sql);

$sql="delete from `dept` where `dept_id`='13'";
echo $pdo->exec($sql);
// 顯示0是失敗 1是成功

