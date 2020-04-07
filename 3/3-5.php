<?php
$a=1;
$b=3;
var_dump($a>$b);
var_dump($a<$b);
var_dump($a>=$b);
var_dump($a<=$b);
//=s是赋值 ==是比较两个的大小是否相等 ===是全等于
//全等于的特点是，不止比较值是否相等还要比较类型是否相等
echo '<hr/>';
var_dump($a==$b);
var_dump($a!=$b);
var_dump($a===$b);

$str='51zxw';
$aa=5;
$is=strpos($str,$aa);
var_dump($is);




//  &&  ||

$str1=3;
$str2=4;
if ($str1==3||$str2==5){
    echo "true";
}else{
    echo "false";
}




