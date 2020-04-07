<?php
header("Content-Type:text/html;charset=utf-8");
$username=isset($_GET['username'])?$_GET['username']:'';
$title=isset($_GET['title'])?$_GET['title']:'';
$content=isset($_GET['content'])?$_GET['content']:'';
$xinqing=isset($_GET['xinqing'])?$_GET['xinqing']:'';
$time=date('Y-m-d h:i:s');
$act=isset($_GET['act'])?$_GET['act']:'';
$filename='text.txt';
//来到doaction页面的时候，先判断 text.txt文件是否存在，文件里面有没有数据，有数据，把text.txt的数据取出来。
if (file_exists($filename)&&filesize($filename)>0){
//从text.txt里面取数据
    $str=file_get_contents($filename);
    //通过反序列化吧字符转换为二维数组
    $arr=unserialize($str);
}
if($act='add') {
    $arr[]=array(
        'username'=>$username,
        'title'=>$title,
        'content'=>$content,
        'xinqing'=>$xinqing,
        'time'=>$time,

    );
    //$filename='text.txt';
    $arr=serialize($arr);
    if(file_put_contents($filename,$arr)){
        echo '添加留言成功！<br/><a href="4-17.php">继续添加留言</a>|<a href="index.php">查看留言</a>';
    }else{
        echo '添加留言失败！';
    }
}


