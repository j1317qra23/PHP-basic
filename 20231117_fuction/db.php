<?php

// 函數調用，從 'students' 表中檢索所有部門為 '3' 的學生信息
$rows = all('students', ['dept' => '3']);

// 函數用於以結構化格式顯示結果
dd($rows);

// 函數根據特定條件從數據庫中檢索數據
function all($table = null, $where = '', $other = '') {
    // 數據庫連接詳情
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn, 'root', ''); // 建立 PDO 連接
    
    $sql = "select * from `$table` "; // 基本的 SQL 查詢，選擇指定表中的所有列
    
    // 檢查是否提供了表名且不為空
    if (isset($table) && !empty($table)) {

        // 檢查條件以過濾查詢是否為數組
        if (is_array($where)) {
            // 根據 $where 數組中的鍵值對構建 WHERE 子句
            if (!empty($where)) {
                $tmp = [];
                foreach ($where as $col => $value) {
                    $tmp[] = "`$col`='$value'"; // 構建列 = 值的對應條件
                }
                $sql .= " where " . join(" && ", $tmp); // 使用 'AND' 將條件組合在一起
            }
        } else {
            $sql .= " $where"; // 如果 $where 不是數組，直接將其添加到查詢中
        }

        $sql .= $other; // 附加任何其他的查詢參數
        
        // 使用 PDO 執行 SQL 查詢並檢索與條件匹配的所有行
        $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows; // 返回檢索到的行數據
    } else {
        echo "錯誤: 沒有指定的資料表名稱"; // 如果未提供表名，則顯示錯誤消息
    }
}

// 函數用於以格式化方式顯示數組內容
function dd($array) {
    echo "<pre>";
    print_r($array); // 輸出數組內容
    echo "</pre>";
}
