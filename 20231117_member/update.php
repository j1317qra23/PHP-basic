<?php
session_start();

if (isset($_POST['submit'])) {
    // 表單已提交，處理更新邏輯

    $dsn = "mysql:host=localhost;charset=utf8;dbname=member";
    $pdo = new PDO($dsn, 'root', '');

    // 獲取表單數據
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // 驗證數據，這裡可以根據你的需求進行更多的數據驗證

    // 更新數據庫
    $sql = "UPDATE users SET pw=:pw, name=:name, email=:email, address=:address WHERE acc=:acc";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':pw', $pw);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':acc', $acc);
    
    if ($stmt->execute()) {
        echo "資料更新成功";
    } else {
        echo "資料更新失敗";
    }
}
?>
