<?php

// global
date_default_timezone_set("Asia/Taipei");
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');

// del()-給定條件後，會去刪除指定的資料
// del('students',['dept'=>5,'status_code'=>'001']);


// insert()-給定資料內容後，會去新增資料到資料表
// insert('dept',['code'=>'112','name'=>'織品系']);

// update   給定資料表的條件後，會去更新相應的資料
// $up=update("students",'3',['dept'=>'16','name'=>'張明珠']);
// dd($up);
// $up=update("students",['dept'=>'90','status_code'=>'001'],['dept'=>'99','name'=>'張明珠']);
// dd($up);


// find   會回傳資料表指定id的資料
// $row=find('students',['dept'=>'1','graduate_at'=>'23']);
// dd($row);

// all    給定資料表名後，會回傳氶個資料表的資料
// $rows=all('students',['dept'=>'1','graduate_at'=>'23']);
// dd($rows);



// 函數調用，從 'students' 表中檢索所有部門為 '3' 的學生信息
// $row=find('students',440);
// dd($row);

// $rows = all('students', ['dept' => '4']);
// dd($rows);

// function
// function pdo($db){
//     $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
//     $pdo=new PDO($dsn,'root','');

//     return $pdo;
// }




// all
function all($table=null,$where='',$other=''){
    // include -- include "pdo.php"; 
    // function --  $pdo=pdo('school');
    // global  -- global $pdo;
    global $pdo;
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
        // echo 'all=>'.$sql;
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }else{
        echo "錯誤:沒有指定的資料表名稱";
    }
}

// find
function find($table,$id){
    global $pdo;
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
    // echo 'find=>'.$sql;
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}

// update
function update($table,$id,$cols){
    global $pdo;

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
    // echo $sql;
    return $pdo->exec($sql);
}

// insert
function insert($table,$values){
    global $pdo;

    $sql="insert into `$table` ";
    $cols="(`".join("`,`",array_keys($values))."`)";
    $vals="('".join("','",$values)."')";

   $sql=$sql . $cols ." values " . $vals;
//    echo  $sql;
   return $pdo->exec($sql);
}

// del
function del($table,$id){
   
    $sql="delete from `$table` ";

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
    // echo $sql;
    return $pdo->exec($sql);
}



 function dd($array){
     echo "<pre>";
     print_r($array);
     echo "</pre>";
 }