<?php
$DB_host = "remotemysql.com";
$DB_user = "4dcmS7Vwcn";
$DB_pass = "tTUeS3RBMl";
$DB_name = "4dcmS7Vwcn";
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
