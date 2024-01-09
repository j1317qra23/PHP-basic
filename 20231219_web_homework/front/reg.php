<?php include_once '../api/db.php'; ?>
<head>
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/js.js"></script>
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
<?php 
					if(!isset($_SESSION['user'])){
					?>
                    <div class="cent">
						<a href="./login.php">會員登入</a>
                        </div>
					<?php 
					}else{
					?>		
						歡迎,<?=$_SESSION['user'];?> 
						<button onclick="location.href='../api/logout.php'">登出</button>

					<?php 
						if($_SESSION['user']=='user'){
						?>
						<button onclick="location.href='./back.php'">管理</button>
						<?php	
						}
					}
					?>		
<fieldset>
    <div class="di">
    <legend class="t botli">會員註冊</legend>
    <span style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</span>
    <table>
        <tr>
            <td class="cent">Step1:登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class="cent">Step2:登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td class="cent">Step3:再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <!-- <td class="cent">Step4:信箱(忘記密碼時使用)</td>
            <td><input type="text" name="email" id="email"></td> -->
        </tr>
        <tr>
            <td>
                <input type="button" value="註冊" onclick="reg()">
                <input type="reset" value="清除">
            </td>
            <td></td>
        </tr>
    </table>
</fieldset>
</div>
<script>
function reg(){
    let user={acc:$("#acc").val(),
              pw:$("#pw").val(),
              pw2:$("#pw2").val(),
              email:$("#email").val()
            }
    if(user.acc!='' && user.pw!='' && user.pw2!='' && user.email!=''){
        if(user.pw==user.pw2){
            $.post("../api/chk_acc.php",{acc:user.acc},(res)=>{
                //console.log(res)
                if(parseInt(res)==1){
                    alert("帳號重覆")
                }else{
                    $.post('../api/reg.php',user,(res)=>{
                        alert('註冊完成，歡迎加入')
                    })
                }
            })
        }else{
            alert("密碼錯誤")
        }
    }else{
        alert("不可空白")
    }
}

</script>