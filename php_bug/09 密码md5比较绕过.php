<?php

//配置数据库
if($_POST['user'] && $_POST['pass']) {
    $conn = mysql_connect("127.0.0.1", "root", "root");
    mysql_select_db("test") or die("Could not select database");
    if ($conn->connect_error) {
        die("Connection failed: " . mysql_error($conn));
} 

//赋值

$user = $_POST['user'];
$pass = md5($_POST['pass']);

//sql语句

// select pw from php where user='' union select '202cb962ac59075b964b07152d234b70' #

// ?user=' union select '202cb962ac59075b964b07152d234b70' #&pass=123

$sql = "select pw from php where user='$user'";
$query = mysql_query($sql);
if (!$query) {
    printf("Error: %s\n", mysql_error($conn));
    exit();
}
$row = mysql_fetch_array($query, MYSQL_ASSOC);
//echo $row["pw"];

  if (($row['pw']) && (!strcasecmp($pass, $row['pw']))) {

//如果 str1 小于 str2 返回 < 0； 如果 str1 大于 str2 返回 > 0；如果两者相等，返回 0。

//    var_dump($row['pw']);
//    var_dump(strcasecmp($pass, $row['pw']));


    echo "<p>Logged in! Key:************** </p>";
}
else {
    echo("<p>Log in failure!</p>");

  }
}
?>