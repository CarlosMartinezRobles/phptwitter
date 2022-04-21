<?php 
// $tweet = "En un lugar de la Mancha...";
// $author = "Cervantes";
// $user = "soycervantes";

require_once "Tweet.php";

$data= file_get_contents("tweets.json");
$jsonData= json_decode($data, true);

$tweets = [];

foreach ($jsonData['tweets'] as $tweet){
    $tweets[] = new Tweet($tweet);
}

require "index.html";
