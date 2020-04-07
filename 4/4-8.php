<?php
//特殊流程控制
//continue跳出当前循环
header("Content-Type:text/html;charset=utf-8");
for ($i;$i<10;$i++){
    if($i==3){
        continue;
    }
    echo '这里是i的值：'.$i.'<br/>';
}