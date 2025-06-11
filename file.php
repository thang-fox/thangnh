<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$file =fopen("data.txt", "a");
fwrite($file, "noi dung moi\n");

$date =date("Y-m-d H:i:s"); 
fclose($file);
?>