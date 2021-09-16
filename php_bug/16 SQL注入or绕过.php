<?php

$flag = 'success';
#GOAL: login as admin,then get the flag;
error_reporting(0);
$conn = mysql_connect('localhost', 'root', 'root');
if (!$conn){
    die('Could not connect: ' . mysql_error());
}
$db="test";
mysql_select_db($db, $conn);

function clean($str){
    if(get_magic_quotes_gpc()){ //get_magic_quotes_gpc — 获取当前 magic_quotes_gpc 的配置选项设置
        $str=stripslashes($str); //返回一个去除转义反斜线后的字符串（\' 转换为 ' 等等）。双反斜线（\\）被转换为单个反斜线（\）。 
    }
    return htmlentities($str, ENT_QUOTES);
}
/*
htmlentities($str, ENT_QUOTES);//将字符转换为 HTML 转义字符，既转换双引号也转换单引号
那么来看看HTML转义字符的范围吧，https://www.w3school.com.cn/html/html_entities.asp，发现转义符号 \ 不在射程范围
思路，尝试试利用sql语句中的单引号构造这样的格式 where name='xx\’x' or 1=1 进行绕过
 */

$username = @clean((string)$_GET['username']);
$password = @clean((string)$_GET['password']);

//$query='SELECT * FROM users WHERE name='admin' AND pass=' or 1=1#‘;';

$query='SELECT * FROM user WHERE name=\''.$username.'\' AND pass=\''.$password.'\';';
var_dump($query);
$result=mysql_query($query);
if(!$result || mysql_num_rows($result) < 1){
    die('Invalid password!');
}

echo $flag;

?>