<?php
header("Content-Type:text/html;charset=utf-8");
class A{

}
class B extends A{

}
$a=new A;
$b=new B;

var_dump(is_a($b,'A'));
var_dump($a instanceof B);
