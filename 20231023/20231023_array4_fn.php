<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
<li>使用亂數函式rand($a,$b)來產生號碼</li>
<li>將產生的號碼順序存入陣列中</li>
<li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
<li>完成選號後將陣列內容印出</li>
</ul>

<?php


// $num = [];

// for ($i = 1; $i <= 6; $i++) {
//     $tmp=rand(1, 38);
//     // !反向
//     if(!in_array($tmp,$num)){
//         $num[]=$tmp;
//     }
    
// }
// foreach($num as $n){
//     echo $n . ",";
// }
?>


<?php


$num = [];
while(count($num)<6){  $tmp=rand(1, 38);
    // !反向
    if(!in_array($tmp,$num)){
        $num[]=$tmp;

}

}

foreach($num as $n){
    echo $n . ",";
}
?>


