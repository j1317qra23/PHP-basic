<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">新聞管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center">
            <tbody>
                <tr class="yel">
                    <td width="12%">新聞標題</td>
                    <td width="12%">文章內容</td>
                    <td width="12%">圖片</td>
                    <td width="12%">發布日期</td>
                    <td width="12%">顯示</td>
                    <td width="12%">刪除</td>
                    <td width="12%">排序</td>
                    <td width="12%">操作</td>
                    <td></td>
                </tr>
                <?php
            
                $rows=$News->all();
                foreach($rows as $row){
                ?>
                <tr>
                    <td width="12%">
                    <input type="text" name="text[]" style="width:80%" value="<?=$row['title'];?>">
                    </td>
                    <td width="12%">
                        <input type="text" name="text[]" style="width:80%" value="<?=$row['news'];?>">
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </td>
                    <td width="12%">
                    <!-- <img src="./img/<?=$row['img'];?>" style="width:300px;height:30px"> -->
                    </td>
                    <td width="12%">
                    <input type="text" name="text[]" style="width:100%" value="<?=$row['date'];?>">
                    </td>
                    <td width="12%">
                    <input type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td width="12%">
                    <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <td>
                    <input type="text" name="text[]" style="width:20%" value="<?=$row['rank'];?>">
                    </td>
                    <td>
                    <input type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')" value="更新圖片">
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <button onclick="location.href='?do=add_news'">新增新聞</button>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>