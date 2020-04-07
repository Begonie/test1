;<?php
header("Content-Type:text/html;charset=utf-8");
$link=mysqli_connect('localhost','root','') or die
("连接数据库成功.<br/>".mysqli_connect_errno().":".mysqli_connect_errno());
mysqli_set_charset($link,'utf8');
mysqli_select_db($link,'stu') or die("打开指定数库出错".mysqli_errno($link).':'.mysqli_error());
$query="select * from student";
$result=mysqli_query($link,$query);
//print_r($result);
if ($result && mysqli_num_rows($result)>0){
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
