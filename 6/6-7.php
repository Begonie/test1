<?php
// Isset和Unset魔术方法解析
/*_isset:当外部调用isset(),函数访问不可检测的属性或者不存在是自动调用；
 * unset:销毁指定的变量
 * */
header("Content-Type:text/html;charset=utf-8");
class person{
    private $username;
    private $age;
    public $abc;
    public function __construct($username,$age)
    {
        $this->username=$username;
        $this->age=$age;
    }
    public function __isset($name){
        echo '_isset:当外部调用isset(),函数访问不可检测的属性或者不存在是自动调用；';
        return isset($name);
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
        echo 'unset:销毁指定的变量';
        unset($username);
    }
}
$p=new person('clice',16);
var_dump(isset($p->abc));
echo '<hr/>';
unset($p->age);