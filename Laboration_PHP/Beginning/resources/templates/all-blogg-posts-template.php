<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//content
echo '<div class="content"> <h2>Alla blogginlägg</h2>';

for ($i = 0; $i <= 3; $i++) {
echo '<div class="post"><h3>' . $model[$i] . '</h3></div>';
}
echo '</div>';
foreach ($model as $key => $value) {
}
//Inlcude Footer
require ('resources/views/footer.php');
?>
