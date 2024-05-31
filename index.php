<?php 

require_once __DIR__ ."/movie.php";
require_once __DIR__ ."/genere.php";

$genere1 = new Genere();
var_dump($genere1);
$genere1 -> setNome("horror");

$movie1 = new Movie("il Signore degli anelli", 5, "Peter Jackson", $genere1);
var_dump($movie1);

$movie2 = new Movie("Lo Hobbit", 4, "Peter Jackson", $genere1);
var_dump($movie2);