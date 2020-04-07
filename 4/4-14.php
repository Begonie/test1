<?php
header("Content-Type:text/html;charset=utf-8");
//通过数组指针函数遍历数组
echo '<pre>';
$arr=array(
    5,
    5.5,
    false,
    'clice'
);
print_r($arr);
echo '<hr/>';
echo current($arr);
echo '<hr/>';
echo key($arr);
echo '<hr/>';
next($arr);
echo current($arr);
echo '<hr/>';
end($arr);
echo current($arr);





echo '</pre>';