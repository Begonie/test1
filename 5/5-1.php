<?php
//$str='abcde';
$str='自学网';
echo strlen($str);
echo '<br/>';
echo '<hr/>';
//字符串首字母大小写

$str1='abcde';
echo ucfirst($str1);
echo '<hr/>';

//加密

echo md5($str1);
//过滤
//strip_tags();

//反转字符串
$str2='abcde';
echo strrev($str2);
echo '<hr/>';
echo min(2, 3, 1, 6, 7);
echo max(2, 3, 1, 6, 7);
echo '<hr/>';
foreach (range(0, 12) as $number) {
    echo $number;
}