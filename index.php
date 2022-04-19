<?php 
// $tweet = "En un lugar de la Mancha...";
// $author = "Cervantes";
// $user = "soycervantes";
$data= file_get_contents("tweets.json");
$jsonData= json_decode($data, true);

require "index.html";