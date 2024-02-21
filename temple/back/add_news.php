<h2 class="ct">新增新聞</h2>
<form action="./api/save_news.php" method="post" enctype="multipart/form-data">
    <table class="all">
      
        <tr>
            <th class="tt ct">新聞標題</th>
            <td class="pp"><input type="text" name="title" value=""></td>
        </tr>
        <tr>
            <th class="tt ct">文章內容</th>
            <td class="pp"><textarea name="news" style="width:80%;height:150px;"></textarea></td>
        </tr>
        <tr>
            <th class="tt ct">商品圖片</th>
            <td class="pp"><input type="file" name="image" value=""></td>
        </tr>
        <tr>
            <th class="tt ct">日期</th>
            <td class="pp"><input type="date" name="date" value=""></td>
        </tr>
        <tr>
            <th class="tt ct">顯示</th>
            <td class="pp"><input type="text" name="sh" value=""></td>
        </tr>
        <tr>
            <th class="tt ct">排序</th>
            <td class="pp"><input type="text" name="rank" value=""></td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
        <input type="button" value="返回">
    </div>
</form>

