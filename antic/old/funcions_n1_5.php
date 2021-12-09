<?php
/*
Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.

Condicions

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.
*/

    function grauSegonsNota ($nota){
        $grau = "Reprovarà";
        switch ($nota) {
            case $nota > 60: 
                $grau = "Primera Divisió";
                break;
           
            case $nota > 45: 
                $grau = "Segona Divisió";
                break;
              
            case $nota > 33: 
                $grau = "Tercera Divisió";           
        }
        return $grau;
    }

    echo "<h3>Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.<br>
    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.<br>
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.<br>
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.<br>
Si la nota és menor a 33%, l'estudiant reprovarà.
</h3>";
    echo "<p>Introdueix la nota (0 a 100%).</p>";

    include "_formulari3.php";

    if (!empty($_POST["num1"])) {
        //convertim a numeric
        $porcentatge = $_POST["num1"]*1;

        echo "Grau corresponent: ".grauSegonsNota($porcentatge)."<br>";      
        
    }
        

?>