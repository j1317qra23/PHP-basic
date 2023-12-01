<?php
// 匯入與資料庫相關的檔案
include_once "db.php";

// 檢查是否存在 POST 請求中的 'id' 參數
if(isset($_POST['id'])){
    // 從資料庫中查找指定 'id' 的資料
    $row = $Title->find($_POST['id']);

    // 檢查是否有上傳檔案
    if(!empty($_FILES['img']['tmp_name'])){
        // 將上傳的檔案移動到指定目錄下的 'img' 資料夾中，並以原始檔案名稱命名
        move_uploaded_file($_FILES['img']['tmp_name'], './img/' . $_FILES['img']['name']);
        
        // 將資料庫中對應的資料行的 'img' 欄位設置為上傳的檔案名稱
        $row['img'] = $_FILES['img']['name'];
        
        // 儲存更新後的資料至資料庫
        $Title->save($row);
    }
}

// 重新導向至 index.php 頁面
header("location: index.php");
?>
