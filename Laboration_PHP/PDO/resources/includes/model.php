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

//skapar SQL-fråga
$sql = 'SELECT p.ID, p.Slug, p.Headline, CONCAT(u.First_Name, " ", u.Last_Name) AS Name, p.Creation_time, p.Text FROM Posts AS p JOIN Users AS u ON u.ID = p.User_ID ORDER BY Creation_time DESC' ;

//testar anslutning//
if($pdo) {

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
