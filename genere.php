<?php 

class Genere { 
    private string $nome;


public function setNome($nome) {
    if ($nome !== "horror" || $nome !== "action" || $nome !== "cartoon" || $nome !== "adventures") {
        throw new Exception("non è un genere");
    }
    $this-> nome = $nome;
}

}