<?php
//Switch...case
header("Content-Type:text/html;charset=utf-8");
$a=2;
switch ($a){
    case 1:
        echo 'a<br/>';
        break;
    case 2:
        echo 'b<br/>';
        break;
    case 3:
        echo 'c<br/>';
        break;
    case 4:
        echo 'd<br/>';
        break;
        default;
        echo '默认执行';
}
