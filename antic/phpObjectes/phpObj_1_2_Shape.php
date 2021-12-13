<?php
/*
Escriu un programa que defineixi una classe Shape amb un constructor 
que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; 
Triangle i Rectangle que heretin de Shape i que calculin respectivament 
l'àrea de la forma area().

A l'arxiu main defineixi dos objectes, un triangle i un rectangle i 
truca al mètode area de cadascun.
*/

class Shape {

    //en un principi em donava error (ex: cas rectangle) per haber-les creat private
    protected $ample = 0;   
    protected $alt = 0;

    public function __construct($ample, $alt) {
        $this->ample = $ample;
        $this->alt = $alt;

        // echo $this->ample." Creat en shape. <br>";
    }

}

class Triangle extends Shape {  
    
    /*
    public function __construct($ample, $alt) {
        $this->ample = $ample;
        $this->alt = $alt;

        echo $this->ample." Creat en triangle. <br>";
    }
    */

    public function area() {
        
        return ($this->ample * $this->alt / 2);
    }

}

class Rectangle extends Shape {    

    public function area() {
        
        return ($this->ample * $this->alt);
    }

}




?>