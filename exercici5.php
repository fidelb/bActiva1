<?php
    /*
    Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.

    Afegeix un valor més a l'array que conté 3 integers.
    Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.
    Ara imprimeix per pantalla l'array resultant valor a valor.
    Consell: pot ser que les funcions var_dump () i / o print_r () et resultin útils per a 
      visualitzar el contingut de les teves arrays.
    */

    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = [99, 98, 97];
    $arr3 = [];
    
    array_push($arr2, 96);

    //Mescla els dos arrays ? 

    foreach ($arr1 as $index => $value) {
      array_push($arr3, $value);
      if (array_key_exists($index, $arr2)) {
        @array_push($arr3, $arr2[$index]);
      }   
    }

    // comprovem el resultat
    // print_r($arr3);

    echo "<br>";

    foreach ($arr3 as $value) {
      echo $value."<br>";
    }    

 ?>
