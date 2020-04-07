<?php
header("Content-Type:text/html;charset=utf-8");
//包含文件
//echo '<pre>';
//print_r(get_defined_functions());
//echo '<pre/>';
require 'newfile.php';
echo $i;
//require 引用文件出错的时候是一个错误，一个警告
//include 引用出错是两个警告
