<?php
/*
La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, 
de tal forma que poguem invocar la funció per a un número concret.

https://es.wikipedia.org/wiki/Criba_de_Erat%C3%B3stenes
*/

    function cribaE($numTope){
        // https://es.wikipedia.org/wiki/Criba_de_Erat%C3%B3stenes , primer paso.

        //creem un array amb els nums desde el 2 fins al num donat
        $a=[];
        for ($i = 2; $i < ($numTope+1); $i++) {            
            $a[$i-2] = $i;
        }
        // print_r($a);

        // https://es.wikipedia.org/wiki/Criba_de_Erat%C3%B3stenes , segundo paso.
        $posInicial = 0;
        $numActual = $a[$posInicial];

        // https://es.wikipedia.org/wiki/Criba_de_Erat%C3%B3stenes , cuarto paso.
        while (pow($numActual, 2) < $numTope) {
            // https://es.wikipedia.org/wiki/Criba_de_Erat%C3%B3stenes , tercer paso.
            //Se tachan todos los múltiplos del número que se acaba de indicar como primo.
            for ($i = count($a)-1; $i > $posInicial; $i--){
                if ($a[$i] % $numActual == 0){
                    array_splice($a, $i, 1);
                }
            }
            $posInicial++;
            $numActual = $a[$posInicial];
        }

        return $a;
    }

    $numDonat = 100;

    echo "<h3>Trobar nombres primers dins d'un interval donat (ex: ".$numDonat.") utilitzant la criba d'Eratóstenes</h3>";

    $b = cribaE($numDonat);
    for ($i = 0; $i < count($b); $i++) {
        echo $b[$i]."<br>";
    }
    
    
?>