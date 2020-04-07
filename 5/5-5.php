<?php
//传值和传引用的区别
function text($i){
    $i='clice';
    echo $i;
}
text(123);

echo '<br/>';

$a='clice';
echo md5($a);
echo '<br/>';
$username='md5';
echo $username('clice');