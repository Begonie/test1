<?php
//变量作用域

//动态局部变量
function text(){
    $j=1;
    $i=3;
    echo $i+$j;
}
text();
echo '<hr/>';

//静态局部变量 static
function text1(){
    static $i=1;
    echo $i.'<br/>';
    $i++;
}
text1();
text1();
text1();
text1();

//全局变量global关键字
$a=10;
function text3(){
    global $a;
    echo $a;
}

echo text3();