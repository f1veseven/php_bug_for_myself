<?php

error_reporting(0);
$flag = 'flag{test}';
if  ("POST" == $_SERVER['REQUEST_METHOD']) 
{ 
    $password = $_POST['password']; 
    if (0 >= preg_match('/^[[:graph:]]{12,}$/', $password)) //preg_match — 执行一个正则表达式匹配  //输入不得少于12位
    { 
        echo 'Wrong Format'; 
        exit; 
    } 
    while (TRUE) 
    { 
        $reg = '/([[:punct:]]+|[[:digit:]]+|[[:upper:]]+|[[:lower:]]+)/';
        if (6 > preg_match_all($reg, $password, $arr)) //意为匹配到的次数要大于6次
            break; 
        $c = 0; 
        $ps = array('punct', 'digit', 'upper', 'lower'); //[[:punct:]] 任何标点符号 [[:digit:]] 任何数字  [[:upper:]] 任何大写字母  [[:lower:]] 任何小写字母 
        foreach ($ps as $pt)    //意为必须要有大小写字母，数字，字符内容三种与三种以上
        { 
            if (preg_match("/[[:$pt:]]+/", $password)) 
                $c += 1; 
        } 
        if ($c < 3) break; 
        //>=3，必须包含四种类型三种与三种以上
        if ("42" == $password) echo $flag; 
        else echo 'Wrong password'; 
        exit; 
    } 
}

?>