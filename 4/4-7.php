<?php
//while和do...while循环
header("Content-Type:text/html;charset=utf-8");
/*
 *
 * */
$i=1;
while ($i<10){
    echo $i.'<br/>';
    $i++;
    if($i==3){
        break;
    }
}


do{
    echo "欢迎来到我要自学网";
}while(false);