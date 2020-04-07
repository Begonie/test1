<?php
//小案例-随机字符串
class randstring{
    //随机数的长度
    private $length;
    //type为1的时候，就是我们数组型的随机数；2：的时候为字母随机数，3，字母加上数字的随机数
    private $type;

    //构造方法初始化
    public function __construct($length,$type)
    {
        $this->length=$length;
        $this->type=$type;
    }
    public function randnum(){
        switch ($this->type){
            case 1:
                return join(array_rand(range(0,9),$this->length));
                break;
            case 2:
                return join(array_rand(array_flip(array_merge(range('a','z'),range('A','Z'))),$this->length));
                break;
            case 3:
                //array_merge合并
                //array_rand从数组中随机取出一个或多个单元
                //array_flip交换数组中的键和值
                return join(array_rand(array_flip(array_merge(range(0,4),range('a','z'),range('A','Z'))),$this->length));
                break;
        }

    }

}

$strnum=new randstring(4,3);
echo $strnum->randnum();