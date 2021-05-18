<?php
$DB_host = "remotemysql.com";
$DB_user = "4eCGr7i2Ph";
$DB_pass = "sJ3UHIWifC";
$DB_name = "4eCGr7i2Ph";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>
