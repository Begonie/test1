<?php
//for循环小练习
header("Content-Type:text/html;charset=utf-8");
$sum=0;
for($i=0;$i<101;$i++){
    $sum=$sum+$i;
}
echo $sum;
echo '<hr/>';

//1-100整除2的数
for($a=0;$a<101;$a++){
    if($a%2==0){
        echo '这是能被2整除的数：'.$a.'<br/>';
    }
}


