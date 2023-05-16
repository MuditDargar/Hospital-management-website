<?php
$servername = "localhost";
$username = "root";
$password = "Mudit@2002";

// Create connection
$conn = new mysqli("localhost", "root", "Mudit@2002");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>