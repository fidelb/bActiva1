<?php

//Implementar patrón Singleton

class Tigger {
     // Contenedor instancia de la clase
    private static $instance = NULL;
    private $comptadorRugits;

    private function __construct() {
            echo "Building character..." . "<br>";
    }

    private function __clone() { }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() {
            $this->comptadorRugits++;
            echo "Grrr!" . "<br>";
    }    

    public function getCounter() {
            return $this->comptadorRugits;            
    }

}

//Ejemplo de utilización
$tigre22 = Tigger::getInstance();
$tigre22->roar();
echo "Grrrs: " . $tigre22->getCounter() . "<br>";
$tigre22->roar();
echo "Grrrs: " . $tigre22->getCounter() . "<br>";

$tigre33 = Tigger::getInstance();
$tigre33->roar();
echo "Grrrs: " . $tigre22->getCounter() . "<br>";

$tigre22->roar();
echo "Grrrs: " . $tigre22->getCounter() . "<br>";