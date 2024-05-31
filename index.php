<?php 

require_once __DIR__ ."/movie.php";
require_once __DIR__ ."/genere.php";

$Genere1 = new Genere("horror");

$movie1 = new Movie("il Signore degli anelli", 5, "Peter Jackson", $Genere1);
var_dump($movie1);

$movie2 = new Movie("Lo Hobbit", 4, "Peter Jackson", $Genere1);
var_dump($movie2);