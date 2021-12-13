<?php
/*
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: 
As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, 
genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit 
en l'última tirada de el dau en qüestió.

Crea finalment el mètode getTotalThrows que ha de mostrar el nombre total 
de tirades entre tots els daus

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora
*/

class PokerDice {

    private $caresDau = array('As', 'K', 'Q', 'J', '7', '8');  
    static private $totalThrows = 0; 
    

    public function throw() {

        self::$totalThrows++;
        
        //return array_rand($this->caresDau);
        return mt_rand(0, 5);
        
    }

    public function shapeName($numCara) {

        return $this->caresDau[$numCara];

    }

    public function getTotalThrows() {

        return self::$totalThrows;
        
    }

}

?>