<?php
header("Content-Type:text/html;charset=utf-8");
$filename='text.txt';
if (file_exists($filename)&&filesize($filename)>0){
//从text.txt里面取数据
    $str=file_get_contents($filename);
    //通过反序列化吧字符转换为二维数组
    $userinfo=unserialize($str);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h3 style="text-align: center">留言列表页-<a href="4-17.php">添加留言</a></h3>
<table style="margin:0 auto" border="1" width="80%"cellpadding="0" cellspacing="0" bgcolor="blue">
    <tr style="text-align: center">
        <td>编号</td>
        <td>标题</td>
        <td>内容</td>
        <td>留言者</td>
        <td>发布时间</td>
        <td>心情</td>
    </tr>
    <?php
    foreach ($userinfo as $key=>$val){
        ?>
        <tr style="text-align: center">
            <td><?php echo $key?></td>
            <td><?php echo $val['title'];?></td>
            <td><?php echo $val['content'];?></td>
            <td><?php echo $val['username'];?></td>
            <td><?php echo $val['time'];?></td>
            <td><img width="100" height="100" src="img/<?php echo $val['xinqing'];?>" alt=""/></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>

