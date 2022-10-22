<?php
/*
Author: Chava Mojesh Chowdary
User:Root 
Password:Mojesh@123456
*/
?>

<?php
$connection = mysql_connect('localhost', 'root', '',"Mojesh@123456");
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('db');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>