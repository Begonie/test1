<?php
header("Content-Type:text/html;charset=utf-8");
//static关键字的使用
class person{
    public static $i=1;
    public static function eat(){
        echo self::$i;
}
}
person::eat();
