<?php
// 引入 db.php 檔案
include_once "db.php";

// 從 POST 請求中獲取表名稱並轉換為大寫
$DB = ${ucfirst($_POST['table'])};
$table = $_POST['table'];

// 如果有上傳檔案，將檔案移動到指定目錄下
if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}

$_POST['sh']=($table=='title')?0:1;



// 移除 $_POST 陣列中的 'table' 鍵值對
unset($_POST['table']);

// 呼叫 $DB 物件的 save 方法並儲存 $_POST 中的資料
$DB->save($_POST);

// 導向至 "../back.php?do=$table" 這個網址，並使用 $table 變數作為參數 'do' 的值
to("../back.php?do=$table");
