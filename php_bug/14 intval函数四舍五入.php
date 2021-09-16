<?php
define('SAE_MYSQL_HOST_M', 'localhost');
define('SAE_MYSQL_PORT', '3306');
define('SAE_MYSQL_USER', 'root');
define('SAE_MYSQL_PASS', 'root');
define('SAE_MYSQL_DB', 'test');

if($_GET['id']) {
   mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
  mysql_select_db(SAE_MYSQL_DB);
  $id = intval($_GET['id']);
  $query = @mysql_fetch_array(mysql_query("select content from ctf2 where id='$id'"));
  if ($_GET['id']==1024) {
      echo "<p>no! try again</p>";
  }
  else{
    echo($query['content']);
  }
}

//for($a=1; $a<=10; $a=$a+0.1){
//    var_dump($a);
//    var_dump(intval($a));
//    echo '<br>';
?>