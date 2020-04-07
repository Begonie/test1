<?php
header("Content-Type:text/html;charset=utf-8");
$link=mysqli_connect('localhost','root','') or die("连接失败<br/>".mysqli_connect_errno().":".mysqli_connect_errno());
mysqli_set_charset($link,'utf8');
mysqli_select_db($link,'stu');
$query="INSERT INTO `student`(`id`, `username`, `age`, `number`) VALUES ('2','wang','27','138993899')";
$res=mysqli_query($link,$query);
if ($res){
    echo "插入数据成功";
}else
{
    echo "插入数据失败";
}