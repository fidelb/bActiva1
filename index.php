<?php
/* 
    mostrar els fitxers .php del directori actual, convertits en link
*/

    $fitxers = scandir(".");

    foreach($fitxers as $value) {
        //saltar aquest fitxer i els fitxers que escomençen per _
        if ($value != "index.php" && substr($value, 0, 1) != "_") {
            if (substr($value, -4) == ".php") {
                echo '<a href="'.$value.'" target="_blank">'.$value.'</a><br>';
            }
        }
    }

?>