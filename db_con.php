<?php
$server = "localhost";
$user = "ADMIN";
$pass = "LocalHorse";
$db ="blogg";

//create connection //
$conn = new mysql($server, $user‚ $pass‚ $db);

//check connection //
if ($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
}

else {
  echo "connection success";
}
 ?>
