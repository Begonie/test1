<?php
header("Content-Type:text/html;charset=utf-8");
//for循环嵌套
for($i=0;$i<3;$i++){
    echo '这里$i循环的次数：'.$i.'<br/>';
    for ($j=0;$j<4;$j++){
        echo '这里$j循环的次数：'.$j.'<br/>';
    }
}