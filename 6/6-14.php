<?php
// 静态的运用场景
header("Content-Type:text/html;charset=utf-8");
class conductor{
    public static $i=100;
    public function sale(){
        $a=self::$i--;
        echo '这里卖了一张票，还剩'.$a.'<br/>';
    }
}
$a=new conductor();
$a->sale();
$a->sale();
$b=new conductor();
$b->sale();
$b->sale();