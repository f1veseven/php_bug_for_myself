<?php

$md51 = md5('QNKCDZO');
$a = @$_GET['a'];
$md52 = @md5($a);

var_dump($md51);
var_dump($md52);

if(isset($a)){
if ($a != 'QNKCDZO' && $md51 == $md52) {
    echo "nctf{*****************}";
} else {
    echo "false!!!";
}}
else{echo "please input a";}


//var_dump(md5('240610708') == md5('QNKCDZO'));
//
//var_dump(md5('aabg7XSs') == md5('aabC9RqS'));
//var_dump(md5('aabg7XSs'), md5('aabC9RqS'));
//
//var_dump(sha1('aaroZmOk') == sha1('aaK1STfY'));
//var_dump(sha1('aaroZmOk'), sha1('aaK1STfY'));
//
//var_dump(sha1('aaO8zKZF') == sha1('aa3OFF9m'));
//var_dump(sha1('aaO8zKZF'), sha1('aa3OFF9m'));
//
//var_dump('0010e2' == '1e3');
//echo 0010e2;
//echo '<br>';
//echo 1e3;
//
//var_dump('0x1234Ab' == '1193131');
//echo 0x12345Ab;


?>