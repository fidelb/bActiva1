<?php
/*
Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després
Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla el string en ordre invers de caràcters.
Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla 
  la concatenació de tots dos strings.

*/

$frase = "Hello, World!";
echo "Frase inicial: ".$frase."<br>";

$frase = strtoupper($frase);

echo "Majúscules: ".$frase."<br>";
echo "Mida: ".strlen($frase)." caracters.<br>";
echo "En ordre invers: ".implode(array_reverse(str_split($frase)))."<br>";

$frase2 = "Aquest és el curs de PHP";

echo $frase.$frase2;

?>
