<?php
//二维数组
header("Content-Type:text/html;charset=utf-8");
echo '<pre>';
$arr1[]=array(
    1.2,
    2.5,
    true,
    'username'
);
$arr1[]=array(
    'id'=>0,
    'username'=>'clice',
    'password'=>123456,
    'addr'=>'北京'

);
echo($arr1[1]['username']);
echo '<br/>';
echo '<hr/>';
echo($arr1[1]['password']);
