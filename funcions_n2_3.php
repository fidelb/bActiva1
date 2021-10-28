<?php
/*
Imagina que som a una botiga on es ven
Xocolata: 1 euro
Xiclets: 0.50 euros
Carmels: 1.50 euros

Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. 
Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint 
els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent per tant el total, 4.
*/

    function cost($quantitat, $producte){
        $cost = 0;
        $preus = array('xocolates' => 1, 'xiclets' => 0.50, 'caramels' => 1.5);

        return $preus[$producte]*$quantitat;
    }

    echo "<h3>
    Imagina que som a una botiga on es ven<br>
Xocolata: 1 euro<br>
Xiclets: 0.50 euros<br>
Carmels: 1.50 euros<br><br>
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus.<br> 
    Per exemple, que si comprem:<br>
    
    2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint 
    els subtotals a un total, tal que així:<br>
    
    funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5<br>
    
    Sent per tant el total, 4.</h3>";

    // $costCompra = cost(2, "xocolates") + cost(1, "xiclets") + cost(1, "caramels");

    // o per parts (sembla més útil en un programa real que vagin introduïnt les dades)
    $costCompra = 0;
    $costCompra += cost(2, "xocolates");
    $costCompra += cost(1, "xiclets");
    $costCompra += cost(1, "caramels");    
    
    echo "Total compra: ".$costCompra;
    
?>