<?php
//通过list和each遍历数组
header("Content-Type:text/html;charset=utf-8");
$arr=array(
    1.2,
    5.6,
    'useranme',
    'addr'
);
//ist必须是我们的索引数组，最好是下标连续的索引数字
list($var1,$var2,$var3,$var4)=$arr;
    echo $var1,'====',$var2,'====',$var3,'====',$var4;
    echo '<hr/>';

    //each
echo '<pre>';
$arr1=array(
    'username',
    'password',
    'addr',
    5.6
);
print_r(each($arr1));
echo '<br/>';
print_r(each($arr1));
echo '<br/>';
print_r(each($arr1));
echo '<br/>';
echo '</pre>';

