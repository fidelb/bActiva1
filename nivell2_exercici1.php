<?php
/*
  Escriure un programa PHP per calcular la suma dels dos valors enters donats. 
  Si els dos valors són iguals, torna el doble de la seva suma.
*/
  include '_formulari.php';

  if (!empty($_POST["num1"]) && !empty($_POST["num2"])) {
    if ($_POST["num1"] == $_POST["num2"]) {
      echo "Resultat: ".$_POST['num1']*4;      
    } else {
      echo "Resultat: ". ($_POST['num1'] + $_POST['num2']);
    }
  }
?>
