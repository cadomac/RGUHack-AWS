<?php

$serverName = "rguattend.c3lzj8wcjn2l.us-west-2.rds.amazonaws.com:3306
";
$DB_name = "admin";
$DB_password = "adminpassword";
$DB = "RGUattend";
//attempting to connect to the database
$conn = new mysqli($serverName, $DB_name, $DB_password, $DB);
//Letting the user know if the connection didnt work
if($conn->connect_error){
    die('ConnectFailed['.$conn->connect_error.']');
}else {
}