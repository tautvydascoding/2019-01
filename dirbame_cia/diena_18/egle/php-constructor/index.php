<?php

include('private.php');

// $Monika = new Zmogus();
// echo $Monika -> ugis; //error cannot accesss private property nes sukurta, kaip private object.

$Monika = new Zmogus("Moniki", 165);
$Tadas = new Zmogus("Tadukas", 180);
echo $Monika -> getUgis() . "<br />";

echo $Monika -> getVardas() . "<br />";


$Monika->setUgis(180);
echo "Ugis po pakeitimo: " . $Monika->getUgis() . "cm" . "<br />";


echo $Tadas -> getUgis() . "<br />";

echo $Tadas -> getVardas() . "<br />";









 ?>
