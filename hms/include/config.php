<?php
define('DB_SERVER','localhost');
define('DB_USER','adminhms');
define('DB_PASS' ,'(r36@y.4c7aZD?w');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>