<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','id19390299_car');
define('DB_PASS','me5m|u-lCs-n^?#T');
define('DB_NAME','id19390299_zoomcar');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>