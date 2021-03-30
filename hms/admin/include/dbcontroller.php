<?php
$DB_host = "localhost";
$DB_user = "adminhms";
$DB_pass = "(r36@y.4c7aZD?w";
$DB_name = "ingram";
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