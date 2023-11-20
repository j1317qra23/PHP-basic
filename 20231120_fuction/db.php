<?php


// update   給定資料表的條件後，會去更新相應的資料
// $up=update("students",'3',['dept'=>'16','name'=>'張明珠']);
// dd($up);
$up=update("students",['dept'=>'90','status_code'=>'001'],['dept'=>'99','name'=>'張明珠']);
dd($up);


// find   會回傳資料表指定id的資料
// $row=find('students',['dept'=>'1','graduate_at'=>'23']);
// dd($row);

// all    給定資料表名後，會回傳氶個資料表的資料
// $rows=all('students',['dept'=>'1','graduate_at'=>'23']);
// dd($rows);



// 函數調用，從 'students' 表中檢索所有部門為 '3' 的學生信息
// $row=find('students',440);
// dd($row);

// $rows = all('students', ['dept' => '3']);
// dd($rows);

// all
function all($table=null,$where='',$other=''){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from `$table` ";
    
    if(isset($table) && !empty($table)){

        if(is_array($where)){
            /**
             * ['dept'=>'2','graduate_at'=>12] =>  where `dept`='2' && `graduate_at`='12'
             * $sql="select * from `$table` where `dept`='2' && `graduate_at`='12'"
             */
            if(!empty($where)){
                foreach($where as $col => $value){
                    $tmp[]="`$col`='$value'";
                }
                $sql .= " where ".join(" && ",$tmp);
            }
        }else{
            $sql .=" $where";
        }

            $sql .=$other;
        echo 'all=>'.$sql;
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }else{
        echo "錯誤:沒有指定的資料表名稱";
    }
}

// find
function find($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from `$table` ";

    if(is_array($id)){
        foreach($id as $col => $value){
            $tmp[]="`$col`='$value'";
        }
        $sql .=" where ".join(" && ",$tmp);
    }else if(is_numeric($id)){
        $sql .= " where `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    echo 'find=>'.$sql;
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}

// update
function update($table,$id,$cols){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');

    $sql="update `$table` set ";

    if(!empty($cols)){
        foreach($cols as $col => $value){
            $tmp[]="`$col`='$value'";
        }
    }else{
        echo "錯誤:缺少要編輯的欄位陣列";
    }

    $sql .= join(",",$tmp);
    $tmp=[];
    if(is_array($id)){
        foreach($id as $col => $value){
            $tmp[]="`$col`='$value'";
        }
        $sql .=" where ".join(" && ",$tmp);
    }else if(is_numeric($id)){
        $sql .= " where `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    echo $sql;
    return $pdo->exec($sql);
}

// find
function del($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from `$table` ";

    if(is_array($id)){
        foreach($id as $col => $value){
            $tmp[]="`$col`='$value'";
        }
        $sql .=" where ".join(" && ",$tmp);
    }else if(is_numeric($id)){
        $sql .= " where `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    echo 'find=>'.$sql;
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}





 function dd($array){
     echo "<pre>";
     print_r($array);
     echo "</pre>";
 }