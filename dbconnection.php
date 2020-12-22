<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "isapp";

// Create connection
$conn = new mysqli("localhost", "root", "", "isapp");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>