<?php
header("Content-Type:text/html;charset=utf-8");
//const关键字的使用 const常量不能修改
class A{
    const ENG='A';
    public $i=1;
}
$a=new A();
echo $a->i=15;
echo '<br/>';
echo A::ENG;