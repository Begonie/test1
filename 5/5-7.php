<?php
//递归函数
header("Content-Type:text/html;charset=utf-8");
function text($i){
    echo '这里是i的值：'.$i.'<br/>';
    $i--;
    if ($i>=0);
    {
        text($i);
    }

}
text(5);