<?php
/*
  Escriu un programa en PHP per convertir una cadena en un array 
  (retallant cada caràcter i eliminant les línies buides).
*/
    
  $cadena = "En un lugar de la Mancha, de cuyo nombre...";

  // convertir en array
  $resultat = str_split($cadena);

  // esborrar espais en blanc
  $aEsborrar = [" "];
  $resultat = array_diff($resultat, $aEsborrar);
  
  print_r($resultat);

?>
