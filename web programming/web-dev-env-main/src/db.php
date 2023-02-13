<?php
$servername = "db";
$username = "capp1";
$password = "password";
$dbmake = "capp1";


$conn = new mysqli ($servername, $username6, $password, $dbanme);

if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
    
}


;?>
