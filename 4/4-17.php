<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h2>添加留言页面</h2>
<form action="doaction.php" method="get">
    <input type="hidden" name="act" value="add"/>
    <table  width="80%" border="1" cellspacing="0" cellpadding="0" bgcolor="blue">
        <tr>
            <td>留言者</td>
            <td><input type="text" name="username" id="" placholder="请输入您的昵称"></td>
        </tr>
        <tr>
            <td>标题</td>
            <td><input type="text" name="title" id="" placholder="请输入您的标题"></td>
        </tr>
        <tr>
            <td>内容</td>
            <td><textarea name="content" id="" cols="45" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>心情</td>
            <td>
                <input type="radio" name="xinqing" value="1.jpg" checked="checked" src="img/1.jpg" alt=""/>
                <input type="radio" name="xinqing" value="2.jpg"  src="img/2.jpg" alt=""/>
                <input type="radio" name="xinqing" value="3.jpg"  src="img/3.jpg" alt=""/>
                <input type="radio" name="xinqing" value="4.jpg"  src="img/4.jpg" alt=""/>
                <input type="radio" name="xinqing" value="5.jpg"  src="img/5.jpg" alt=""/>
            </td>
        </tr>
        <tr>
            <td><input colspan='2'type="submit"/></td>
        </tr>
    </table>
</form>
</body>
</html>
