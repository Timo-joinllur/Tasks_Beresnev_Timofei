<?php
$servername = "db";
$username = "app1";
$password = "password";
$dbname = "YaCblNSluhi";
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed; " . $conn->connect_error);
}
?>

