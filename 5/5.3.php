<?php
//函数参数
header("Content-Type:text/html;charset=utf-8");
function createtable($rows,$cols,$bgcolor='pink'){
    echo "<table border='1' width='80%' bgcolor='{$bgcolor}'>";
    for ($i=1;$i<=$rows;$i++){
        echo '<tr>';
        for ($j=1;$j<=$cols;$j++){
            echo '<td>xxxxx</td>';
        }
    }
    echo '<tr/>';
    echo '</table>';
}

/**
 *
 */
createtable(3,6);
echo '<hr/>';
function sum1($str1,$str2){
    return $str1+$str2;
}

echo sum1(4,5);