<?php include_once 'db.php';

$News->save($_POST);
to("../back.php?do=news");


