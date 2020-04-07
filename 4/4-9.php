<?php
header("Content-Type:text/html;charset=utf-8");
//php数组
//$arr=array();
//var_dump($arr);
$arr=array(1,5.5,false,'小敏');
print_r($arr) ;
echo '<hr/>';

$arr1=array(
    5=>'clive',
    6=>12,
    9=>false,
    4=>4.4
);
print_r($arr1);
echo '<hr/>';

$arr2=array(
    'username'=>'clice',
    'password'=>123456,
    'age'=>27
);
print_r($arr2);
echo '<hr/>';
$arr3=array(1,2,3,4,5,6,7,
    'username'=>'51自学网',
    '北京'
    );
print_r($arr3);
echo '<hr/>';