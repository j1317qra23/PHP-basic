<h2 class="ct">新增管理帳號</h2>
<!-- form:post>table.all>tr*3>td.tt.ct+td.pp>input:text -->
<form action="./api/save_admin.php" method="post">
<table class="all">
    <tr>
        <td class="tt ct">新聞標題</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">文章內容</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">圖片</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">日期</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">顯示</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">排序</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    
    
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>
</form>