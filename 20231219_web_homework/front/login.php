<?php include_once '../api/db.php'; ?>
<?php
if(isset($_SESSION['login'])){
    to("../back.php");
}

if(isset($_GET['error'])){
    echo "<script>alert('{$_GET['error']}')</script>";
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>管理員登入</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .di {
            height: 540px;
            border: #999 1px solid;
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .t {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .botli {
            border-bottom: 1px solid #999;
            margin-bottom: 20px;
        }

        .cent {
            text-align: center;
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"],
        input[type="reset"] {
            padding: 5px 10px;
            margin: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="di">
        <?php include "marquee.php"; ?>
        <div style="height: 32px;"></div>
        <!-- 正中央 -->
        <form method="post" action="../api/check.php">
            <p class="t botli">管理員登入區</p>
            <p class="cent">帳號：<input name="acc" autofocus="" type="text"></p>
            <p class="cent">密碼：<input name="pw" type="password"></p>
            <p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
            <p class="cent"> <a href="reg.php">尚未註冊</a> </p>
        </form>
    </div>
    <script>
function login(){
    $.post('./api/chk_acc.php',{acc:$("#acc").val()},(res)=>{
        if(parseInt(res)==0){
            alert("查無帳號")
        }else{
            $.post('./api/chk_pw.php',
                   {acc:$("#acc").val(),pw:$("#pw").val()},
                   (res)=>{
                        if(parseInt(res)==1){
                            if($("#acc").val()=='user'){
                                location.href='back.php'
                            }else{
                                location.href='index.php'
                            }
                        }else{
                            alert("密碼錯誤")
                        }
            })
        }
    })
}
</script>
</body>
</html>
