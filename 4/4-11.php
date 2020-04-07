<?php
header("Content-Type:text/html;charset=utf-8");
//数组的使用
$arr[]=array();
$arr[]=1.2;
$arr[]=55;
$arr[]=false;
$arr[]='clice';
echo print_r($arr);
echo '<br/>';
echo '<hr/>';
echo $arr[1];
$arr[6]='qbcd';
$arr[7]='username';
echo print_r($arr);
echo '<br/>';
echo '<hr/>';
//删除数组里面的数据
unset($arr['username']);
echo print_r($arr);
echo '<br/>';
echo '<hr/>';

//修改
$arr[3]='51自学网';
echo print_r($arr);
echo '<br/>';
echo '<hr/>';