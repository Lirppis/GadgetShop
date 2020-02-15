<?php
$servername="localhost";
$username="matt";
$password="Scooby1990!";
$dbname ="discountdb";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);
?>

