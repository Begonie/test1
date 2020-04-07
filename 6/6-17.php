<?php
class A{

}
class B extends A{

}
$a=new A();
$b=new B();
//is_a,instanceof:检查这个对象是否是这个类或者子类的实例
var_dump(is_a($b,'A'));
var_dump($a instanceof A);
//get_class()返回对象的类名
echo get_class($a);
//get_parent_class() 返回父类的类名
echo get_parent_class($b);