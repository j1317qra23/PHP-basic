<?php
include_once "db.php";
//取得資料表名稱
$table=$_POST['table'];

//將資料表名稱轉成首字大寫的資料表物件變數
$DB=${ucfirst($table)};

//取得id為1的資料
$data=$DB->find(1);

//將資料中對應的欄位修改為post過來的值
$data[$table]=$_POST[$table];

//使用save更新至資料表
$DB->save($data);
to("../back.php?do=$table");
?>




<!-- // 引入 db.php 檔案，這個檔案可能包含了資料庫連線和其他必要的功能
include_once "db.php";

// 透過 $Bottom 物件的 find 方法找到 ID 為 1 的資料
$bottom = $Bottom->find(1);

// 將從 POST 請求中取得的 'bottom' 資料更新到 $bottom['bottom'] 中
$bottom['bottom'] = $_POST['bottom'];

// 儲存更新後的 $bottom 資料到資料庫
$Bottom->save($bottom);

// 導向到 "../back.php?do=bottom" 這個網址，可能是用來顯示後端的某個功能或內容
to("../back.php?do=bottom"); -->

