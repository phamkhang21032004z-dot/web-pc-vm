<?php
$configDB = array();
$configDB["host"] 		= "hktsql.mysql.database.azure.com";
$configDB["database"]	= "computer_store";
$configDB["username"] 	= "khang";
$configDB["password"] 	= "tdc@12345";
define("HOST", "hktsql.mysql.database.azure.com");
define("DB_NAME", "computer_store");
define("DB_USER", "khang");
define("DB_PASS", "tdc@12345");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
