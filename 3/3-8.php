<?php
header("Content-Type:text/html;charset=utf-8");
$usename='clice';
$sex='男';
if($usename=='clice'){
    echo '账号密码正确，允许登入';
    echo '<br/>';
    echo '<hr/>';
    if($sex=='女'){
        echo '欢迎clice先生登入网站';
    }else{
        echo '欢迎女士登入网站';
    }
    }else{
    echo '输入错误';
}
echo date('Y年m月d日 h:i:s ');