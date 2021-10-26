<?php
    /*
    Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i 
      assigna a cadascuna un valor. 
      
    A continuació, mostra per pantalla per a X i Y:
    El valor de cada variable
    La suma
    La resta
    El producte
    El mòdul

    Per N i M realitzaràs el mateix.

    Per a totes les variables (X, I, N, M)

    El doble de cada variable
    La suma de totes les variables
    El producte de totes les variables
    */

    $X = 6;
    $Y = 9;
    $N = 35.8;
    $M = 3.141;

    echo "X: ".$X."<br>";
    echo "Y: ".$Y."<br>";
    echo "La suma: ". ($X+$Y) ."<br>";
    echo "La resta: ". ($X-$Y) ."<br>";
    echo "El producte: ". ($X*$Y) ."<br>";
    echo "El mòdul: ". ($X%$Y) ."<br>";

    echo "<br>";

    echo "N: ".$N."<br>";
    echo "M: ".$M."<br>";
    echo "La suma: ". ($N+$M) ."<br>";
    echo "La resta: ". ($N-$M) ."<br>";
    echo "El producte: ". ($N*$M) ."<br>";
    echo "El mòdul: ". ($N%$M) ."<br>";

    echo "<br>";

    echo "El doble de X: " . ($X*2) . "<br>";
    echo "El doble de Y: " . ($Y*2) . "<br>";
    echo "El doble de N: " . ($N*2) . "<br>";
    echo "El doble de M: ". ($M*2) . "<br>";
   
    echo "<br>";

    echo "La suma total: ". ($X+$Y+$N+$M) ."<br>";

    echo "<br>";

    echo "El producte total: ".$X*$Y*$N*$M."<br>";

 ?>
