<?php

//Give Active Navigation the class="highligt"
function navigation($highlight) {
    $start = '';
    $kontakt = '';
    $blogg = '';
    $posta = '';

    if($highlight == 'Start') {
        $start = 'class="highlight"';
    }
    elseif($highlight == 'Kontakt') {
        $kontakt = 'class="highlight"';
    }
    elseif($highlight == 'Blogg') {
        $blogg = 'class="highlight"';
    }
     elseif ($higlight =='Posta') {
        $Posta = 'class="highlight"';
     }

    echo '
        <nav>
            <ul>
                <li><a ' . $start . ' href="index.php">Start</a></li>
			    <li><a ' . $blogg . ' href="index.php?page=blogg">Blogg</a></li>
			    <li><a ' . $kontakt . ' href="index.php?page=kontakt">Kontakt</a></li>
			    <li><a ' . $posta . ' href="index.php?page=Posta">Posta</a></li>
		    </ul>
	    </nav>';
}

//Function for Copyright, checks the year to add to the copyright "claim"
function echoYear(){
    $year = date('Y');
    if ($year == 2017) {
        echo 'copyright 2017';
    }
    else {
        echo 'copyright 2017-' . $year;
    }
}
?>
