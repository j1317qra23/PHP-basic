<?php include_once '../api/db.php'; ?>
<head>
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/js.js"></script>
</head>
<?php 
					if(!isset($_SESSION['admin'])){
					?>
						<a href="./login.php">會員登入</a>
					<?php 
					}else{
					?>		
						歡迎,<?=$_SESSION['admin'];?> 
						<button onclick="location.href='../api/logout.php'">登出</button>

					<?php 
						if($_SESSION['admin']=='admin'){
						?>
						<button onclick="location.href='./back.php'">管理</button>
						<?php	
						}
					}
					?>		
<fieldset>
    <legend>會員註冊</legend>
    <span style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</span>
    <table>
        <tr>
            <td class="clo">Step1:登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class="clo">Step2:登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td class="clo">Step3:再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <td class="clo">Step4:信箱(忘記密碼時使用)</td>
            <td><input type="text" name="email" id="email"></td>
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
<script>
function reg(){
    let admin={acc:$("#acc").val(),
              pw:$("#pw").val(),
              pw2:$("#pw2").val(),
              email:$("#email").val()
            }
    if(admin.acc!='' && admin.pw!='' && admin.pw2!='' && admin.email!=''){
        if(admin.pw==admin.pw2){
            $.post("../api/chk_acc.php",{acc:admin.acc},(res)=>{
                //console.log(res)
                if(parseInt(res)==1){
                    alert("帳號重覆")
                }else{
                    $.post('../api/reg.php',admin,(res)=>{
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