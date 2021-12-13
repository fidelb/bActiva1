<?php
/*
Crea un projecte Bancs, afegeix a el projecte una classe Account 
amb atributs per número de compte, nom i cognoms de el client i 
el saldo actual. Defineix en la classe els següents mètodes:

Constructor que inicialitzi els atributs.
Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
Crea el mètode withdraw($amount) que permet retirar una quantitat del compte 
sempre que hi hagi saldo, si no n'hi ha el mètode haurà de retornar un missatge 
d'error

Getters i Setters.

Crea una petita interfície amb ajuda d'HTML I CSS que permeti ingressar 
una quantitat i dipositar o retirar el saldo del compte.

Fes les validacions pertinents per assegurar que la quantitat ingressada 
per l'usuari és correcta.

*/

class Account {

    private $numCompte = 0;  
    private $nom = ''; 
    private $cognoms = '';
    private $saldo = 0;
    

    public function __construct($nom, $cognoms, $numCompte, $saldo) {

        $this->numCompte = $numCompte;
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->saldo = $saldo;
        
    }

    public function getNom() {

        return $this->nom;

    }

    public function getCognoms() {

        return $this->cognoms;

    }

    public function getNumCompte() {

        return $this->numCompte;

    }

    public function getSaldo() {

        return $this->saldo;

    }


    public function setNom($n) {

        $this->nom = $n;

    }

    public function setCognoms($c) {

        $this->cognoms = $c;

    }

    public function setNumCompte($n) {

        $this->numCompte = $n;

    }

    public function setSaldo($s) {

        $this->saldo = $s;

    }

    public function dipositar($q) {

        $this->saldo += $q;
        return $this->saldo;

    }

    public function retirar($q) {

        if ($this->saldo < $q) {
            //saldo insuficient
            echo "Error: Saldo insuficient, no s'ha pogut efectuar la retirada.<br>";
        } else {
            $this->saldo -= $q;               
        }
        return $this->saldo;

    }

    

}

?>