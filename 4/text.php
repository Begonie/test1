<?php
header("Content-Type:text/html;charset=utf-8");
$filename='text.txt';
$data=1;
file_put_contents($filename,$data);