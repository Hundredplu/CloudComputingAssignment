<?php
session_start();
$servername = "clouddatabase.cxiuezajhedf.us-east-1.rds.amazonaws.com";
$server_user = "master";
$server_pass = "master123";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
