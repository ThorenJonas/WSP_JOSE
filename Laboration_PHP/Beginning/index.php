<?php
/*
This is my solution for the laboration that Niklas Mårdby share on his wiki Porkforge.
I've used this laboration to show my pupils how you can work with PHP in developement.
http://porkforge.mardby.se/index.php?title=PHP_Laboration_2_-_Projektstart,_require_och_GET
*/

require 'resources/functions/functions.php';
require 'resources/functions/model.php';

// Set header correct without using HTML
header("Content-type: text/html; charset=utf-8");

// Get value from url for key page
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

if (empty($page)) {
	$labb = 'Labb Beginning';
	$header = 'Start';
	$content = '<div class="content">Välkommen till Labb 2! Här övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är andra labben men första labben i en serie labbar som tillsammans bygger vidare på detta projekt som vi påbörjar här. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.</div>';
    require ('resources/templates/page-template.php');
}

elseif ($page == 'blogg') {
	$labb = 'Labb Blogging';
	$header = 'Blogg';
	$post = filter_input(INPUT_GET, 'post', FILTER_SANITIZE_URL);
	$template = 'all-blogg-posts';

	if (!empty($post)) {
		foreach ($model as $key => $slug) {
			if ($model[$key]['slug'] == $post) {
				$template = 'single-blogg-post';
				$title = $model[$key]['title'];
				$author = $model[$key]['author'];
				$date = $model[$key]['date'];
				$message = $model[$key]['text'];
			}
		}
	}

	elseif (empty($post)) {

	}

	else {

	}

	require ('resources/templates/' . $template . '-template.php');
}
else if($page=="kontakt") {
	$labb = 'Labb kontakt';
	$header = 'Kontakt';
    $content = '<div class="content">Du når oss på epost@labb2.se</div>';
    include ('resources/templates/page-template.php');
}
else {
	echo "Den sökta sidan finns inte";
}


?>
