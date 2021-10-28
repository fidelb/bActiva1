<?php
/*
Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. 
Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.
*/

    function esOlimpic($any){
        /*
        Los Juegos Olímpicos de Verano se organizan cada cuatro años bajo la supervisión del 
        Comité Olímpico Internacional. Su primera edición fue en Atenas 1896.
        */
        return ($any-1896) % 4 == 0; 
    }

    echo "<h3>Llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016.</h3>";
    
    for ($i = 1960; $i < 2017; $i++) {
        if (esOlimpic($i)) {
            echo $i."<br>";
        }
    }
?>