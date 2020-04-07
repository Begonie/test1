<?php
$userinfo[]=array('id'=>1,'username'=>'clice1','sex'=>'男','age'=>20,'face'=>'1.jpg');
$userinfo[]=array('id'=>2,'username'=>'clice2','sex'=>'女','age'=>20,'face'=>'2.jpg');
$userinfo[]=array('id'=>3,'username'=>'clice3','sex'=>'男','age'=>20,'face'=>'3.jpg');
$userinfo[]=array('id'=>4,'username'=>'clice4','sex'=>'男','age'=>20,'face'=>'4.jpg');
$userinfo[]=array('id'=>5,'username'=>'clice5','sex'=>'女','age'=>20,'face'=>'5.jpg');
$userinfo[]=array('id'=>6,'username'=>'clice6','sex'=>'女','age'=>20,'face'=>'6.jpg');
$userinfo[]=array('id'=>7,'username'=>'clice7','sex'=>'男','age'=>20,'face'=>'7.jpg');
$userinfo[]=array('id'=>8,'username'=>'clice8','sex'=>'女','age'=>20,'face'=>'8.jpg');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h3 style="text-align: center">用户列表页</h3>
<table style="margin:0 auto" border="1" width="80%"cellpadding="0" cellspacing="0" bgcolor="blue">
    <tr style="text-align: center">
        <td>编号</td>
        <td>用户名</td>
        <td>性别</td>
        <td>年龄</td>
        <td>头像</td>
    </tr>
    <?php
    foreach ($userinfo as $val){
        ?>
        <tr style="text-align: center">
            <td><?php echo $val['id'];?></td>
            <td><?php echo $val['username'];?></td>
            <td><?php echo $val['sex'];?></td>
            <td><?php echo $val['age'];?></td>
            <td><img width="100" height="100" src="img/<?php echo $val['face'];?>" alt=""/></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
    