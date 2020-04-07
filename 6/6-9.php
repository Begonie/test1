<?php
//php中的继承 extends
header("Content-Type:text/html;charset=utf-8");
class person{
    public $name;
    public $age;
    public function eat(){

        echo '吃饭';
    }
}

class student extends person{

}

$stu=new student();
echo $stu->eat();