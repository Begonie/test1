<?php
//回调函数
header("Content-Type:text/html;charset=utf-8");
function text1(){
    echo '这个是text1';
}
function text2($username){
    echo '这个是text2'.'<br/>'.'这里是username的值'.$username;
}
//回调函数：函数体内的名称是我们传入的参数（）;
function callback($call,$str){
    $call($str);
}
//回调函数就是传入的参数是你想要回调的函数名称
callback('text2','小明');
echo '<br/>';
call_user_func('text1');
call_user_func('text2','clice');