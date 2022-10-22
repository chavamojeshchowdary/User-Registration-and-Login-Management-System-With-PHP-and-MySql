<?php
/*
Author: Chava Mojesh Chowdary
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
