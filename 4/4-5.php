<?php
for($i=0;$i<7;$i++){
    for ($j=0;$j<$i;$j++){
        echo '*';
    }
    echo '<br/>';
}
//九九乘法表
for($a=1;$a<=9;$a++){
    for ($b=1;$b<=$a;$b++){
        echo $b.'*'.$a.'='.($a*$b)."\t";
    }
    echo '<br/>';
}