<?php

/*
Crea una classe Employee defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o 
no pagar impostos (si el sou supera 6000 paga impostos).
*/

include 'phpObj_1_1_employee.php';

$treballador1 = new Employee();
$treballador1->initialize('Nancy', 9000);
$treballador2 = new Employee();
$treballador2->initialize('Fidel', 2000);

$treballador1->print();
$treballador2->print();

echo "<br>";

/*
Escriu un programa que defineixi una classe Shape amb un constructor 
que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; 
Triangle i Rectangle que heretin de Shape i que calculin respectivament 
l'àrea de la forma area().

A l'arxiu main defineixi dos objectes, un triangle i un rectangle i 
truca al mètode area de cadascun.
*/

include 'phpObj_1_2_Shape.php';

$ampleTriangle = 5;
$altTriangle = 4;
$ampleRectangle = 3;
$altRectangle = 2;


$triangle = new Triangle($ampleTriangle, $altTriangle);
$rectangle = new Rectangle($ampleRectangle, $altRectangle);

echo "El area de un triangle de ".$ampleTriangle." x ".$altTriangle." es: ".$triangle->area()."<br>";
echo "El area de un rectangle de ".$ampleRectangle." x ".$altRectangle." es: ".$rectangle->area()."<br>";

echo "<br>";

/*
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: 
As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, 
genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit 
en l'última tirada de el dau en qüestió.

Crea finalment el mètode getTotalThrows que ha de mostrar el nombre total 
de tirades entre tots els daus

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora
*/

include 'phpObj_2_1_PokerDice.php';


$dau1 = new PokerDice();
echo "Dau: ".$dau1->shapeName($dau1->throw())."<br>";

$dau2 = new PokerDice();
echo "Dau: ".$dau2->shapeName($dau2->throw())."<br>";

$dau3 = new PokerDice();
echo "Dau: ".$dau3->shapeName($dau3->throw())."<br>";

$dau4 = new PokerDice();
echo "Dau: ".$dau4->shapeName($dau4->throw())."<br>";

$dau5 = new PokerDice();
echo "Dau: ".$dau5->shapeName($dau5->throw())."<br>";

echo "Total tirades: ".$dau1->getTotalThrows()."<br>";

echo "<br>";

/*
Crea un projecte Bancs, afegeix a el projecte una classe Account 
amb atributs per número de compte, nom i cognoms de el client i 
el saldo actual. Defineix en la classe els següents mètodes:

Constructor que inicialitzi els atributs.
Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
Crea el mètode withdraw($amount) que permet retirar una quantitat del compte 
sempre que hi hagi saldo, si no n'hi ha el mètode haurà de retornar un missatge 
d'error

Getters i Setters.

Crea una petita interfície amb ajuda d'HTML I CSS que permeti ingressar 
una quantitat i dipositar o retirar el saldo del compte.

Fes les validacions pertinents per assegurar que la quantitat ingressada 
per l'usuari és correcta.

*/

include 'phpObj_3_1_Account.php';

$saldoInicial = 500;

echo "El saldo inicial es: ".$saldoInicial."<br><br>";

include 'phpObj_formulari.php';

$compte1 = new Account('Fidel', 'Barril Folch', 1, $saldoInicial);

if (isset($_POST['num1'])) {
    switch ($_POST['tipusOperacio']) {
        case 'dipositar':
            $compte1->dipositar($_POST['num1']);
            break;
        case 'retirar':
            $compte1->retirar($_POST['num1']);
            break;
    }

    echo "El nou saldo es: ".$compte1->getSaldo();
}


?>