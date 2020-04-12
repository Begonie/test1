<?php

class randstring{
    //随机获取字符的长度
    public $length;
    //type=1,表示随机数字，2表示随机数字和字母，3代表数字，字母大小写
    public $type;

    //构造函数
    public function __construct($length,$type)
    {
        $this->length=$length;
        $this->type=$type;
    }
    public  function randnum(){
        switch ($this->type){
            case 1;
                return join(array_rand(range(0,9),$this->length));
            break;
            case 2:
                return join(array_rand(array_flip(array_merge(range(0,9),range('a','b'))),$this->length));
                break;
            case 3:
                return join(array_rand(array_flip(array_merge(range(0,9),range('a','b'),range('A','Z'))),$this->length));
                break;
        }
    }
}

$strnum=new randstring(4,3);
echo $strnum->randnum();
