<?php

$servername = "fdb19.biz.nf";
$username = "2572622_login";
$password = "lala1passwordjankarkyakarega";
$dbname = "2572622_login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>