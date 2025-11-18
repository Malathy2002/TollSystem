<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_toll_system";

// Create connection
$conn = new mysqli('localhost', 'root','' , 'smart_toll_system');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
