<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mydatebase = "localhost";
$database_mydatebase = "mydatebase";
$username_mydatebase = "admin";
$password_mydatebase = "a123";
$mydatebase = mysql_pconnect($hostname_mydatebase, $username_mydatebase, $password_mydatebase) or trigger_error(mysql_error(),E_USER_ERROR); 
?>