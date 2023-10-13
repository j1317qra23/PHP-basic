<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    td {
        border: 1px solid black;
        padding: 3px 9px;
    }
    th {
        border: 1px solid black;
        padding: 3px 9px;
    }
    .table-container {
        border: 2px solid black; /* 表格外框 */
        display: inline-block; /* 讓外框自適應內容 */
    }
</style>
<div class="table-container">
    <table>
        <tr>
            <th></th>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
        ?>
        </tr>
        <?php
        for ($j = 1; $j <= 9; $j++) {
            echo "<tr>";
            echo "<th>$j</th>";
            for ($i = 1; $i <= 9; $i++) {
                echo "<td>";
                echo ($j * $i);
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>
