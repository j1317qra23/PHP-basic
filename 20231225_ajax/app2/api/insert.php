<?php
//處理新增資料的請求
include_once "db.php";

$Student->save($_POST);

to("../index.html");

// 合併使用save.php

?>