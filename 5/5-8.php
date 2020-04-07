<?php
//匿名函数和可变参数函数
header("Content-Type:text/html;charset=utf-8");
$str=function(){
    echo '这里是匿名函数';
};
$str();
echo '<br/>';

$str1=function($username){
    echo '这里是有参数匿名函数';
    echo $username;
};
$str1('clice');
echo '<br/>';

/*func_num_args()统计个数
 * func_get_arg取值
 * func_num_args()输出数组
 * */
function text(){
    echo func_num_args();
    echo '<br/>';
    echo func_get_arg(0);
    echo '<br/>';
    print_r(func_num_args());
}
echo text('用户名','密码','12300122300');