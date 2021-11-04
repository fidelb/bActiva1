<?php
/*
  $ X = array (10, 20, 30, 40, 50);

Elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres 
  han de ser normalitzades.

Sortida
array(5) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(40) [4]=> int(50) }
array(5) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(40) [4]=> int(50) }

*/
    $X = array (10, 20, 30, 40, 50);
    print_r($X);  

    $aEsborrar = 20;
    $trobatEnPosicio = array_search($aEsborrar, $X);
    
    array_splice ($X, $trobatEnPosicio, 1);
    
    echo "<br>Esborrat element ".$aEsborrar."<br>";
    print_r($X);

?>
