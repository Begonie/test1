<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script src="jquery-2.2.3.js" type="text/javascript"></script>
</head>
<body>
<?php
header("Content-Type:text/html;charset=utf-8");
//$str="请输入验证吗：";
//$rand=mt_rand(1000,9999);//生成随机数
//echo $str.$rand;
$str="请输入验证吗：";
$str.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).'">'.mt_rand(0,9).'</span>';
$str.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).'">'.mt_rand(0,9).'</span>';
$str.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).'">'.mt_rand(0,9).'</span>';
$str.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).'">'.mt_rand(0,9).'</span>';
echo $str;
?>
</body>
</html>

