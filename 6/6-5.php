<?php
//构造函数和析构函数

header("Content-Type:text/html;charset=utf-8");
class person{
    public $username;
    public $age;
    //php5.5以前的写法
//    public function person(){
//        echo '我是构造函数！';
//    }


    //通过一个魔术常量来写构造函数
    public function __construct($username,$age)
    {
        $this->username=$username;
        $this->age=$age;

    }
    //__destruct() 析构函数
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo '析构函数会在对象所引用被删除或者显示的消失之前被调用';
    }


}

$p=new person('clice',27);
echo $p->username.'<br/>';

$p1=null;

