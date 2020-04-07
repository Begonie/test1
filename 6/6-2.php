<?php
//类和对象的简介及如何创建类和对象
class person{
/*
 * 类里面有属性和方法的存在
 * public 访问修饰符
 * */
            public $usename='clice';
            public $age=27;
}

$p=new person();
echo $p ->usename.'<hr/>';
echo $p ->age.'<hr/>';
