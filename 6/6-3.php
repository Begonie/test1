<?php
header("Content-Type:text/html;charset=utf-8");
class person{
    public $username;
    public $age;
    //类里面的行为页成为方法
    public function eat(){
        echo '人类是要吃饭的啊！';
    }
}

$p=new person();
$p->eat();