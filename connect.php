<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_soccer_6330207110";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>