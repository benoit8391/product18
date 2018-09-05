<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_product = "localhost";
$database_product = "product";
$username_product = "admin";
$password_product = "a123";
$product = mysql_pconnect($hostname_product, $username_product, $password_product) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("set names utf8");
error_reporting(0);
?>