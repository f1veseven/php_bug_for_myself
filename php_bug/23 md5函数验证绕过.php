<?php

error_reporting(0);
$flag = 'flag{test}';
$temp = $_GET['password'];
//var_dump(md5($temp));
if(md5($temp)==0){
    echo $flag;
}

?>