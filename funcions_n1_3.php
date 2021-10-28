<?php
/*
Per jugar a el "amagatall" se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. 
Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.

Imagina't que volem que compti fins a un nombre diferent de 10. 
Programa la funció perquè el final del compte estigui parametritzat.
*/

    function comptaFinsFinalde2en2 ($finalDelCompte) {
        for ($i=2; $i<$finalDelCompte+1; $i=$i+2) {
            echo $i."<br>";
        }
    }

    $numDonat = 50;

    echo "<h3>Crea una funció que compti fins a num donat (ex: ".$numDonat."), de 2 en 2, mostrant cada número del compte per pantalla.</h3><br>";

    comptaFinsFinalde2en2($numDonat);
       

?>