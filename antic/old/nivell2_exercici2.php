<?php
/*
  Escriu un programa PHP per intercanviar el primer i últim caràcter 
  d'una cadena donada i imprimeix la nova cadena.
*/
    include '_formulari2.php';

    if (!empty($_POST["cadena"])) {

      $cadena = $_POST["cadena"];
      $llarg = strlen($cadena);

      $temp = $cadena[0];
      $cadena[0] = $cadena[($llarg-1)];
      $cadena[($llarg-1)] = $temp;

      echo "Texte modificat: ".$cadena;     
      
    }

?>
