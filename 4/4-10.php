<?php
//动态和快速创建数组
header("Content-Type:text/html;charset=utf-8");
$arr[]=1;
$arr[]=2.3;
$arr[]=true;
$arr[]='小明';
print_r($arr);
echo '<br/>';
echo '<hr/>';
//指定下标，创建索引数组
$arr1[]=1;
$arr1[3]=2.3;
$arr1[5]=true;
$arr1[]='小明';
print_r($arr1);
echo '<br/>';
echo '<hr/>';
//创建关联数组
$arr2['username']='clice';
$arr2['password']=123456;
$arr2['address']='北京';
print_r($arr2);
echo '<br/>';
echo '<hr/>';
//快速创建索引数组
echo print_r(range(1,10,2));
echo '<br/>';
echo '<hr/>';
$username='clice';
$password='12345';
$addr='北京';
echo print_r(compact('username','password','addr'));
echo '<br/>';
echo '<hr/>';
$arr3[]=array();