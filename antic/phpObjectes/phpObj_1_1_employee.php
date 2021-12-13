<?php
/*
Crea una classe Employee defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o 
no pagar impostos (si el sou supera 6000 paga impostos).
*/

class Employee {

    private $nom = '';
    private $sou = 0;

    public function initialize($n, $s) {
        $this->nom = $n;
        $this->sou = $s;
    }

    public function print() {
        if ($this->sou > 6000) {
            echo "El treballador ".$this->nom . " (sou ".$this->sou."), si ha de pagar impostos.<br>";
        } else {
            echo "El treballador ".$this->nom . " (sou ".$this->sou."), no ha de pagar impostos.<br>";
        }
        
    }


}

/*
$treballador1 = new Employee();
$treballador1->initialize('Nancy', 9000);
$treballador2 = new Employee();
$treballador2->initialize('Fidel', 2000);

$treballador1->print();
$treballador2->print();
*/

?>