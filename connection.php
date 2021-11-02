<?php
  /*$servername = "sql11.freemysqlhosting.net";
  $username = "sql11435752";
  $password = "8kxebkB8gM";*/
  define('servername', 'sql11.freemysqlhosting.net');
  define('username', 'sql11435752');
  define('password', '8kxebkB8gM');
  define('dbname', 'login');

  // Create connection
  $conn = mysqli_connect(servername, username, password, dbname);

  // Check connection
  if ($conn == false) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    echo "Connected successfully";
  }
?>