<?php
header("Content-Type:text/html;charset=utf-8");
//通过foreach遍历数组
$arr=array(
    1,2,3,4,5,
    'username',
    'password',
    'addr'
);
print_r($arr);
echo '<br/>';
echo '<hr/>';
foreach ($arr as $key=>$value){
    echo '数组的键名为：'.$key.'数组值为：'.$value.'<br/>';
}
echo '<hr/>';
echo '<pre>';
$arr1[]=array(
    'id'=>1,
    'username'=>'clice',
    'password'=>123456,
    'addr'=>'北京'
);
$arr1[]=array(
    'id'=>2,
    'username'=>'clice2',
    'password'=>1234562,
    'addr'=>'北京2'
);
$arr1[]=array(
    'id'=>3,
    'username'=>'clice3',
    'password'=>1234563,
    'addr'=>'北京3'
);
echo '<pre/>';
foreach ($arr1 as $key=>$value){
    echo '数组的键名为：'.$key.'数组值为：'.$value.'<br/>';
    echo '数组的键名为：'.$key.'username数组值为：'.$value['username'].'<br/>';
}