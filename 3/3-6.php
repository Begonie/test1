
<?php
//执行运算符
//通过反引号实现我们的外壳的代码
echo `ipconfig`;
echo "<hr/>";
echo shell_exec('ipconfig');
echo "<hr/>";
if (3>2){
    echo 'true';
}else
{
    echo 'false';
}
echo "<hr/>";
//三元运算符
echo 3<2? 'true':'false';
echo "<hr/>";
//我们额错误抑制符
echo @(3/0);