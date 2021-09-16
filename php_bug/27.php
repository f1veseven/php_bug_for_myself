<?php
if(!$_GET['id']) {
	header('Location:
  27.php?id=1');
	exit();
}
$id=$_GET['id'];
$a=$_GET['a'];
$b=$_GET['b'];
if(stripos($a,'.')) {
	echo 'Hahahahahaha';
	return ;
}
$data = @file_get_contents($a,'r');
var_dump($data);
var_dump($data=="1112 is a nice lab!");
var_dump($id==0);
var_dump(strlen($b)>5);
var_dump(eregi("111".substr($b,0,1),"1114"));
var_dump(substr($b,0,1)!=4);
if($data=="1112 is a nice lab!" and $id==0 and strlen($b)>5 and eregi("111".substr($b,0,1),"1114") and substr($b,0,1)!=4) {
	require("flag.php");
} else {
	print "work harder!harder!harder!";
}
?>