<?php
require 'resources/includes/db_con.php';
if (pdo) {
$sql = '';
$user = '1';
$headline = 'varde ljus';
$headline = trim($headline);
$slug = 'varde_ljus';
$text = '';
      if ($_server["REQUEST_METHOD"] == "POST") {

            $sql = 'INSERT INTO table ("User_ID", "slug", "headline", "Text") VALUES ('.$user', '.$slug', '.$headline', '.$text.')';

            echo $sql;
      }
}

?>
