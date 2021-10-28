<?php
/*
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica d'acord 
a les següents premisses:

Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
*/

    function costTrucada($minuts){
        $cost = 0;
        if ($minuts <= 3) {
            $cost = 10;
        } else {
            $cost = ($minuts * 5) - 5;
        }
        return $cost;
    }

    echo "<h3>Escriu una funció que determini la quantitat total a pagar per una trucada telefònica d'acord 
    a les següents premisses:    
    Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.
    Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.</h3>";
    echo "<p>Introdueix els minuts de la trucada:</P>";
    
    include "_formulari3.php";
    
    if (!empty($_POST["num1"])) {
        $minuts = $_POST["num1"];
        echo $minuts." minuts, costen ".costTrucada($minuts)." centims";
    }
    
?>