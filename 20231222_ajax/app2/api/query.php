<?php
include_once "db.php";
//處理查詢資料的請求
switch($_GET['do']){
    case "all":
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($Student->all());
    break;
    case 'sex':
        $users=$Student->q("select `name`,`uni_id`,`school_num`,`birthday` from `students` where substr(`uni_id`,2,1)='{$_GET['value']}'");
        
        header('Content-Type: application/json; charset=utf-8');        
        echo json_encode($users);
    break;
    case 'class':
            
            dd($_GET['value']);
    break;
}

?>