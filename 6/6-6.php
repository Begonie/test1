<?php
header("Content-Type:text/html;charset=utf-8");
//Set和Get魔术方法使用
class person{
    private $username;
    private $age;
//    public function setage($age){
//        $this->age=$age;
//    }
//    public function getage(){
//        return $this->age;
//    }

    public function __set($key, $value)
    {
        // TODO: Implement __set() method.
        $this->username=$value;
    }
    public function __get($key)
    {
        // TODO: Implement __get() method.
        return $this->username;
    }
}

$p=new person();
//echo $p->username;
// $p->setage(16);
//echo $p->getage();
//echo '<hr/>';

$p->__set('username','clice');
echo $p->__get('username');