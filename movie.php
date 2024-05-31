<?php 

class Movie { 
    private string $title; 
    private int $rating;
    private string $regista;
    private Genere $Genere;

public function __construct(string $title,int $rating,string $regista, Genere $Genere) {
    $this -> title = $title;
    $this -> rating = $rating;
    $this -> regista = $regista;
    $this -> Genere = $Genere;
}

}