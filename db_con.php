<?php

$server = "localhost";
$user = "admin";
$pass = "localhorse";


// Createing connection
$conn = new mysqli($server, $user, $pass);

// Checking Connection
if ($conn->connect_error) {
  die("Connection FAILD: " . $conn->connect_error);
}

else{
  echo "Connection established";
}

?>
