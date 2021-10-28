<?php
/*
Charlie em va mossegar el dit!

Charlie et mossegarà el dit exactament el 50% del temps.

Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.

Consell: pot ser que la funció rand () et resulti útil.
*/

    function isBitten (){
        return mt_rand(0,1); 
    }

    echo "<h3>Charlie et mossegarà el dit exactament el 50% del temps.</h3>";
    echo "<p>Torna a carregar la pàgina per a veure si em va mossegar.</p>";

    if (isBitten()) {
        echo "Charlie em va mossegar el dit!";
    } else {
        echo "Charlie no em va mossegar el dit!";
    }

?>