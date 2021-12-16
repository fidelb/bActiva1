<?php

//Implementar patrón Adapter

class Duck {

    public function quack() {
           echo "Quack <br>";
    }

    public function fly() {
           echo "I'm flying <br>";
    }
}

class Turkey {

    public function gobble() {
           echo "Gobble gobble <br>";
    }

    public function fly() {
    echo "I'm flying a short distance <br>";
    }
}

//class TurkeyAdapter extends Turkey {
class TurkeyAdapter {
    private $pavo;

    function __construct(Turkey $pavo) {
        $this->pavo = $pavo;    
    }

    public function quack() {
        echo $this->pavo->gobble();
    }

    public function fly() {
        for ($i=1; $i<=5; $i++){
            echo $this->pavo->fly();   
        }
    }
}

function duck_interaction($duck) {
    $duck->quack();
    $duck->fly();
}

//Ejemplo de utilización
$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...<br>";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...<br>";
duck_interaction($duck);
echo "The TurkeyAdapter says...<br>";
duck_interaction($turkey_adapter);

/*
// si class TurkeyAdapter extends Turkey:
echo "The TurkeyAdapter says...<br>";
$turkey_adapter->gobble();
$turkey_adapter->fly();
*/
