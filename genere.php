<?php 

class Genere { 
    private string $Genere;


public function setGenere($Genere) {
    if ($Genere !== "horror" || "action" || "cartoon" || "adventures") {
        throw new Exception("non è un genere");
    }
    $this-> Genere = $Genere;
}

}