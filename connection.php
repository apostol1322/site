<?php
$servername = "sql11.freemysqlhosting.net";
$username = "sql11435752";
$password = "8kxebkB8gM";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>