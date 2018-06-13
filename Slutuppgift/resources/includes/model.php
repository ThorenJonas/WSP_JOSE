<?php
require 'resources/includes/db_conn.php'; // Kommentar här, tvingar sidan att även ladda db_conn.php filen för att sidan ska funka. Ger tillgång till databasen.

if ($pdo) {

    // Kommentar här, Tar alla blogg inläg från databasen och visar upp efter datumet det var upplagt på.
    $sql = 'SELECT P.ID, P.Slug, P.Headline, CONCAT(U.Firstname, " ", U.Lastname) AS Name, P.Creation_time, P.Text FROM Posts AS P JOIN Users AS U ON U.ID = P.User_ID ORDER BY P.Creation_time DESC';

    // Kommentar här, kollar ifall variabeln search är SATT, alltså att man klickat på sök-knappen.
    if (isset($_POST['search'])) {
        // Kommentar här, ser till att $data har samma mening som $_POST,
        $data = $_POST['what'];

        /**********************************************************/
        /*********************** C-UPPGIFT 1 **********************/
        /*** Variabeln $data kan innehålla, som den är utformad, **/
        /********* information som kan skada vår databas. *********/
        /*** För betyget C så kräver jag att ni säkerställer att **/
        /***** $data inte innehåller någon form av skadlig kod ****/
        /**********************************************************/

        /**********************************************************/
        /*********************** C-UPPGIFT 2 **********************/
        /* I filen all-posts.php så skrivs det ut en kortare text */
        /* följt av en länk till berört inlägg. Vore det inte mer */
        /* passande att det istället skrivs ut ord från inlägget? */
        /* För betyget C så kräver jag att ni tar fram en lösning */
        /**** där 10 ord från inlägget skrivs ut före läs mer. ****/
        /************ Tänk implode och/eller explode! *************/
        /**********************************************************/

        /**********************************************************/
        /************************ A-UPPGIFT ***********************/
        /** Som det är just nu så tar vi bara in en variabel som **/
        /******* vi använder när vi söker igenom databasen. *******/
        /* Tittar man på sidor som exempelvis google och facebook */
        /**** så kan din sökning oftast innehålla flera sökord ****/
        /* För betyget A så kräver jag att ni tar fram en lösning */
        /** som gör det möjligt för användaren att kunna söka på **/
        /** flera separerade ord. Att man exempelvis kan söka på **/
        /***** texter som innehåller både "Lorum" och "Ipsum." ****/
        /**********************************************************/

        // Takes all entries/posts and puts them in the order of what date it was posted, from the latest to the first post uploaded
        if (!empty($data)) {
            $sql = 'SELECT p.ID, p.Slug, p.Headline, CONCAT(u.Firstname, " ", u.Lastname) AS Name, p.Creation_time, p.Text FROM Posts AS p JOIN Users AS u ON U.ID = P.User_ID WHERE p.Text LIKE "%'.$data.'%" ORDER BY P.Creation_time DESC';
        }
    }

    // Creates model array, foreach ger tillgång till databasen.
    $model = array();
    foreach($pdo->query($sql) as $row) {
        // Kommentar här, används för att visa hela posten och printar ut det på en "egen" sida
        $model += array(
            $row['ID'] => array(
                'slug' => $row['Slug'],
                'title' => $row['Headline'],
                'author' => $row['Name'],
                'date' => $row['Creation_time'],
                'text' => $row['Text']
            )
        );
    }
}
//prints error info, incase of errors //
else {
    print_r($pdo->errorInfo());
}
?>
