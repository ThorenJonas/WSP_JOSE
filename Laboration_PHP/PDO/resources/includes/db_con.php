<?php
//anslutings uppgifter till data basen
$host = 'localhost';
$dbname = 'blogg';
$user = 'admin';
$password = 'localhorse';

//skapar atributet//
$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
// inställningr för databas-anslutning
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

// skapar PDO object
$pdo = new PDO($dsn, $user, $password, $attr);
?>
