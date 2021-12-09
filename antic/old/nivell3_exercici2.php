<?php
/*
  Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array.

*/
  $arr1=[33, 22, 11, 33, 44, 33, 55];
  $arr2=[33];
  
  print_r($arr1);  
  echo "<br>vegades trobat el valor ".$arr2[0].": ".count(array_intersect($arr1,$arr2));     

?>
