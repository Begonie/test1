<?php
//final关键字的使用
//修饰不能继承的方法
header("Content-Type:text/html;charset=utf-8");

class person{
    public $age;
    final public function eat(){
        echo '这里是人类的方法';
    }

}

class student extends person{
    public function eat()
    {
        echo '这里是学生类的方法';
    }
}

$stu=new student();
echo $stu->eat();