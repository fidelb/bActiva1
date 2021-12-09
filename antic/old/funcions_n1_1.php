<?php
/*
Programa una funciò que, donat un número qualsevol(per exemple,la teva edat) 
ens digui si és parell o imparell mitjançant un missatge per pantalla.
*/

    function esParell ($num) {
        return $num%2==0;
    }


    echo "<h3>Programa una funciò que, donat un número qualsevol(per exemple,la teva edat) 
    ens digui si és parell o imparell mitjançant un missatge per pantalla.</h3><br>";

    include "_formulari3.php";

    if (!empty($_POST["num1"])) {
        if (esParell($_POST["num1"])){
            echo "El número ".$_POST["num1"]." es parell";
        } else {
            echo "El número ".$_POST["num1"]." es imparell";
        }
    }
       

?>