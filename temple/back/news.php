<div style="width:99%; height:87%; margin:auto; overflow:auto;">
    <p class="t cent botli"></p>
   
    <table class="all">
    
    <button onclick="location.href='?do=add_news'">新增新聞</button>

    <tr class="tt ct">
        <td>新聞標題</td>
        <td>文章內容</td>
        <td>圖片</td>
        <td>發布日期</td>
        <td>顯示</td>
        <td>排序</td>
        <td>操作</td>
    </tr>
    <?php
    $rows = $News->all();
    foreach ($rows as $row) {
    ?>
        <tr class="pp ct">
            <td>
                <input type="text" name="text[]" style="width:50%" value="<?= $row['title']; ?>">
            </td>
            <td>
                <input type="text" name="text[]" style="width:50%" value="<?= $row['news']; ?>">
                <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
            </td>
            <td>
                <img src="./img/<?= $row['image']; ?>" style="width:30px;height:30px">
            </td>
            <td>
                <input type="text" name="text[]" style="width:70%" value="<?= $row['date']; ?>">
            </td>
            <td>
                <input type="checkbox" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
            </td>
            
            <td>
                <input type="text" name="text[]" style="width:20%" value="<?= $row['rank']; ?>">
            </td>
            <td>
            <?php
            echo "<button onclick='location.href=&#39;?do=edit_news&id={$row['id']}&#39;'>修改</button>";
            echo "<button onclick='del(&#39;news&#39;,{$row['id']})'>刪除</button>";
        ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

      

    </form>
</div>