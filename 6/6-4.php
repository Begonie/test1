<?php
//访问修饰符
header("Content-Type:text/html;charset=utf-8");
class cat{
    public $name='小花猫';
    protected $age=3;

    public function eat(){
        //$this
        echo '猫要吃鱼'.'<br/>';
        echo $this->age;
    }
}

$cat1=new cat();
echo $cat1->name;
//echo $cat1->age;
$cat1->eat();