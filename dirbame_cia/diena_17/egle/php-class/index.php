
<?php

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas

// UZDUOTIS 2.1
// Monikos objektui priskirti reiksmes: Monika, 155
// Tado objektui priskirti reiksmes: Tadas, 180
// Kesto objektui priskirti reiksmes: Kestas, 179

require_once('class.php');

$Monika = new Zmogus();
  echo "Monikos ugis: ". $Monika -> ugis ."<br />";
    $Monika -> ugis = 155; //keiciamas ugis
    $Monika -> vardas = "Monika";
  echo "Monikos naujas ugis: ". $Monika -> ugis . "cm" ."<br />";
  echo "vardas: " . $Monika -> vardas ."<br />";
$Tadas = new Zmogus();
  $Tadas -> ugis = 180;
  $Tadas -> vardas = "Tadas";
  echo "zmogaus ugis: ". $Tadas -> ugis . "jo vardas: ". $Tadas -> vardas. "<br />";


$Kestas = new Zmogus();
$Kestas -> ugis = 179;
$Kestas -> vardas = "Kestas";
echo "zmogaus vardas : $Kestas->vardas, jo ugis: $Kestas->ugis cm <br />";

// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()'

$Tadas -> einu();





























 ?>
