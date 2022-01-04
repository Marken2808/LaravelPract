<?php
$servername = "mysql";
$username = "root";
$password = "secret";
$dbname = "interviewdb";

// Create connection
$conn = new mysqli("$servername:3306", $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>