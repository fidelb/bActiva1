<?php
/*
Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.
*/

$enter = 33;
$doble = 99.95;
$frase = "En un lugar de la mancha, de cuyo nombre...";
$adulto = false;

echo "Entero: ".$enter."<br>";
echo "Número: ".$doble."<br>";
echo "Frase: ".$frase."<br>";

echo "Es adulto (".$adulto.")? ";
if($adulto) {
  echo "Sí, es adulto.";
} else {
  echo "No, es menor de edad.";
}

?>
