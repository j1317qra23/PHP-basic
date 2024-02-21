<h2 class="ct">修改新聞</h2>
<?php
$row=$News->find($_GET['id']);
?>
<form action="./api/save_news.php" method="post">
    <table class="all">
      
        <tr>
            <th class="tt ct">新聞標題</th>
            <td class="pp"><input type="text" name="title" value="<?=$row['title'];?>"></td>
        </tr>
        <tr>
            <th class="tt ct">文章內容</th>
            <td class="pp"><textarea name="news" style="width:80%;height:150px;" value="<?=$row['news'];?>"></textarea></td>
        </tr>
        <tr>
            <th class="tt ct">商品圖片</th>
            <td class="pp"><input type="file" name="image" value="<?=$row['image'];?>"></td>
        </tr>
        <tr>
            <th class="tt ct">日期</th>
            <td class="pp"><input type="date" name="date" value="<?=$row['date'];?>"></td>
        </tr>
        <tr>
            <th class="tt ct">顯示</th>
            <td class="pp"><input type="text" name="sh" value="<?=$row['sh'];?>"></td>
        </tr>
        <tr>
            <th class="tt ct">排序</th>
            <td class="pp"><input type="text" name="rank" value="<?=$row['rank'];?>"></td>
        </tr>
    </table>
    <div class="ct">
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
        <input type="button" value="返回" onclick="location.href='?do=news'">
    </div>
</form>

