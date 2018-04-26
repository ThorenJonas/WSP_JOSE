<?php
require 'resources/includes/db_con.php';


//testar anslutning//
if($pdo) {

      //skapar Standard SQL-fråga
      $sql = 'SELECT p.ID, p.Slug, p.Headline, CONCAT(u.First_Name, " ", u.Last_Name) AS Name, p.Creation_time, p.Text FROM Posts AS p JOIN Users AS u ON u.ID = p.User_ID ORDER BY Creation_time DESC' ;

      $search = false;
      $what = '';

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $what = $_POST["search"];
            if (condition) {
                  # code
            }
            else {
                  $search = false;
            }
      }

      //skapar model-array
      $model = array();
      foreach($pdo->query($sql) as $row) {
            $model += array(
                  $row['ID'] =>  array(
                        'slug' => $row['Slug'],
                        'title' => $row['Headline'],
                        'author' => $row['Name'],
                        'date' => $row['Creation_time'],
                        'text' => $row['Text']
                  )
            );
       }
}
else { print_r($pdo->errorInfo()); }
?>
