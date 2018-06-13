<?php
// Content
echo '<h2>Alla blogginlägg</h2>' . $error;
?>
<!-- Formulär för att söka efter inlägg -->
<form class="search" method="post">
    <input type="text" placeholder="Search..." name="what">
    <button type="submit" name="search"><i class="fa fa-search"></i></button>
</form>

<?php

// Kommentar här, Drar fram den Post som man har tryck på "Läs mer" på blogg sidan för den post som man har klickat den på .    Från framtiden leder till från framtiden i sin hela istället för en anna post.
foreach ($model as $key => $value) {
    echo '<div class="post">';
    echo '<h3>' . $model[$key]['title'] . '</h3>';
    echo '<p class="author">Författare: ' . $model[$key]['author'] .'</p>';
    echo '<p class="date">Datum: ' . $model[$key]['date'] .'</p>';
    echo '<p class="Text">Här vill vi visa de 10 första orden från inlägget... <a href="index.php?page=blogg&post=' . $model[$key]['slug'].'">Läs mer</a></p>'; //Kommentar här,  läser ut en text, och länkar till hela posten genom $model[$key]['slug'].
    echo '</div>';
}
?>
