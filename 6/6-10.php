<?php
//parent关键字的使用
header("Content-Type:text/html;charset=utf-8");

class person{
    public $username='爸爸';
    public $age=66;
    protected function eat(){
        echo '年龄大了吃饭慢';
    }
}

class student extends person {
    //重写
    public $usename='儿子';
    public $age=16;
    public  function eat(){
        parent::eat();
        echo '吃得比较快';
    }
}

$stu=new student();
echo $stu->eat();