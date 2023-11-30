<?php
include_once "db.php";
dd($_POST);
foreach($_POST['id'] as $key => $id){
    $row=$Title->find($id);
    // dd($row);
    $row['text']=$_POST['text'][$key];
    // dd($row);
    $Title->save($row);
    
}

foreach($_POST['id'] as $id){
    $row=$Title->find($id);
    /* if($id==$_POST['sh']){
        $row['sh']=1;
    }else{
        $row['sh']=0;
    } */
    $row['sh']=($id==$_POST['sh'])?1:0;
    $Title->save($row);
}






/* 

$_POST['sh']=0;

$Title->save($_POST);

header("location:index.php");
 */
?>