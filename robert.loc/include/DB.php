<?php
$connect = mysql_connect($host_mysql, $user_mysql, $pswd_mysql) or die("Не могу соединиться с MySQL.");
mysql_select_db($database_mysql) or die("Не могу подключиться к базе.");