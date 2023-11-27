<?php 
// 設定預設時區為亞洲/台北
date_default_timezone_set("Asia/Taipei");

// 啟動一個 session
session_start();

// 建立一個名為 DB 的類別
class DB{
    // 資料庫連接的設定
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    // 建構函式初始化資料表和資料庫連線
    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', ''); // 建立 PDO 連線
    }

    // 檢索所有記錄，包含可選的 WHERE 條件和其他條件
    function all($where = '', $other = '')
    {
        $sql = "select * from `$this->table` "; // 基本的 SQL 查詢
        
        // 檢查是否有指定資料表
        if (isset($this->table) && !empty($this->table)) {
            if (is_array($where)) { // 檢查 WHERE 條件是否為陣列
                if (!empty($where)) {
                    foreach ($where as $col => $value) {
                        $tmp[] = "`$col`='$value'"; // 建立 WHERE 條件
                    }
                    $sql .= " where " . join(" && ", $tmp); // 構建 WHERE 子句
                }
            } else {
                $sql .= " $where"; // 處理額外的 WHERE 條件
            }
    
            $sql .= $other; // 加入其他條件
            $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); // 執行查詢並取得記錄
            return $rows;
        } else {
            echo "錯誤: 沒有指定的資料表名稱"; // 如果沒有指定資料表，顯示錯誤訊息
        }
    }

    // 計算符合條件的記錄數量
    function count($where = '', $other = '')
    {
        $sql = "select count(*) from `$this->table` "; // 基本的 SQL 計數查詢
        
        // 檢查是否有指定資料表
        if (isset($this->table) && !empty($this->table)) {
            if (is_array($where)) { // 檢查 WHERE 條件是否為陣列
                if (!empty($where)) {
                    foreach ($where as $col => $value) {
                        $tmp[] = "`$col`='$value'"; // 建立 WHERE 條件
                    }
                    $sql .= " where " . join(" && ", $tmp); // 構建 WHERE 子句
                }
            } else {
                $sql .= " $where"; // 處理額外的 WHERE 條件
            }
    
            $sql .= $other; // 加入其他條件
            $rows = $this->pdo->query($sql)->fetchColumn(); // 執行計數查詢
            return $rows;
        } else {
            echo "錯誤: 沒有指定的資料表名稱"; // 如果沒有指定資料表，顯示錯誤訊息
        }
    }

    // 根據 ID 或條件查找記錄
    function find($id)
    {
        $sql = "select * from `$this->table` "; // 基本的 SQL 查詢
        
        if (is_array($id)) { // 如果 ID 是陣列，建立條件
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
            $sql .= " where " . join(" && ", $tmp); // 構建 WHERE 子句
        } else if (is_numeric($id)) { // 如果 ID 是數字
            $sql .= " where `id`='$id'"; // 按 ID 查找
        } else {
            echo "錯誤: 參數的資料型態必須是數字或陣列"; // 如果 ID 的型態不符，顯示錯誤訊息
        }
        
        $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC); // 執行查詢並取得記錄
        return $row;
    }

    // 儲存或更新記錄
    function save($array)
    {
        if (isset($array['id'])) { // 如果有 ID，進行更新操作
            $sql = "update `$this->table` set ";
    
            if (!empty($cols)) {
                foreach ($cols as $col => $value) {
                    $tmp[] = "`$col`='$value'"; // 準備更新欄位
                }
            } else {
                echo "錯誤: 缺少要編輯的欄位陣列"; // 如果沒有指定更新的欄位，顯示錯誤訊息
            }
        
            $sql .= join(",", $tmp);
            $sql .= " where `id`='{$array['id']}'"; // 根據 ID 執行更新
        } else {
            $sql = "insert into `$this->table` ";
            $cols = "(`" . join("`,`", array_keys($array)) . "`)"; // 取得欄位名稱
            $vals = "('" . join("','", $array) . "')"; // 取得值
        
            $sql = $sql . $cols . " values " . $vals; // 準備插入新記錄的 SQL
        }

        return $this->pdo->exec($sql); // 執行 SQL 查詢
    }


    function del($id)
    {
        $sql = "delete from `$this->table` where "; // 準備 SQL 刪除語句
        
        if (is_array($id)) {
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'"; // 準備 WHERE 子句（陣列）
            }
            $sql .= join(" && ", $tmp); // 使用 AND 串連 WHERE 條件
        } else if (is_numeric($id)) {
            $sql .= " `id`='$id'"; // 若提供數字 ID，以 ID 進行刪除
        } else {
            echo "錯誤: 參數的資料型態必須是數字或陣列"; // 輸出錯誤訊息
        }
        //echo $sql;  // 若需顯示所生成的 SQL 語句，可取消註解此行
        
        return $this->pdo->exec($sql); // 執行 SQL 刪除語句並返回受影響的行數
    }
    
    function q($sql){
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); // 執行提供的 SQL 查詢並返回查詢結果
    }
    
    // 輔助函式：以易讀的方式輸出變數的內容
    function dd($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    
    // 建立 'students' 資料表的 DB 實例
    $student = new DB('students');
    
    // 使用 count 方法計算 'students' 資料表中的記錄數量
    $rows = $student->count();
    
    // 以易讀的方式輸出結果
    dd($rows);
    